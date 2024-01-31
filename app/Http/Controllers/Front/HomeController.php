<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStore;
use App\Models\Benefits;
use App\Models\Category;
use App\Models\NewsLetter;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Service;
use App\Models\SubCategory;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::all();
        $data['services'] = Service::all();
        $data['products'] = Product::all();
        $data['benefits'] = Benefits::all();
        return view('site.index', compact('data'));
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

        $products = Product::whereIn('sub_categories_id', $subCategoryIds)
            ->get();

        return view('site.products', compact('sub_categories', 'products', 'category'));
    }
}
