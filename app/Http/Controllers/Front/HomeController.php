<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStore;
use App\Models\About;
use App\Models\Benefits;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Faqs;
use App\Models\News;
use App\Models\NewsLetter;
use App\Models\PartnerSuccess;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Service;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::all();
        $data['services'] = Service::all();
        $data['products'] = Product::latest()->take(9)->get();
        $data['benefits'] = Benefits::all();
        $data['certificates'] = Certificate::all();
        $data['partners_success'] = PartnerSuccess::all();
        $data['setting'] = About::first();
        $data['news'] = $this->getNewsLatest();
        return view('site.index', compact('data'));
    }

    private function getNewsLatest()
    {
        try {
            return News::latest()->limit(3)->get();
        } catch (\Exception $e) {
            Log::error('Error retrieving latest News: ' . $e->getMessage());
            return null;
        }
    }

    public function storeNews(NewsStore $request)
    {
        $inputs = $request->all();

        if (NewsLetter::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function getSubCategory($categoryId)
    {
        $category = Category::where('id', $categoryId)->first();
        $sub_categories = SubCategory::query()
            ->select('id', 'title_ar', 'title_en', 'category_id')
            ->where('category_id', $categoryId)
            ->get();

        $subCategoryIds = $sub_categories->pluck('id')->toArray();

        // Assuming you have an Eloquent model named 'Product' and a variable $subCategoryIds containing an array of sub-category IDs

        $products = Product::whereIn('sub_categories_id', $subCategoryIds)
            ->orderBy('created_at', 'desc')
            ->get();


        return view('site.products', compact('sub_categories', 'products', 'category'));
    }

    public function architecture()
    {
        return view('site.architecture');
    }
    public function news()
    {
        return view('site.news');
    }


}
