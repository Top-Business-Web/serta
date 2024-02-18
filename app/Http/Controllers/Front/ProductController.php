<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        $data['categories'] = Category::with('subCategory')->withCount('subCategory')->get();
        $data['sub_categories'] = SubCategory::all();
        return view('site.products', compact('data'));
    }

    public function singleProduct($id)
    {
        $data['products'] = Product::all();
        $data['product'] = Product::find($id);
        $data['related'] = Product::where('sub_categories_id', $id)->get();
        return view('site.single-products', compact('data'));
    }

    public function productSearch(Request $request)
    {
        if ($request->ajax()) {
            $output = '';

            if ($request->categoryId != '') {
                $products = Product::where('sub_categories_id', $request->categoryId)
                    ->orderBy('created_at', 'desc')
                    ->get();
            } else {
                $products = Product::get();
            }

            if ($products->count() > 0) {
                foreach ($products as $product) {
                    $output .=
                        '<div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                    <a href="' . route("singleProduct", $product->id) . '" class="w-100">
                                        <img src="' . asset($product->images[0]) . '" alt="">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href="' . route('singleProduct', $product->id) . '"
                                               class="fs-5">' . $product->title_ar . '</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }
                return Response($output);
            } else {
                return response('no data', 404);
            }
        }
    } // end search


    public function productSort(Request $request)
    {
        if ($request->ajax()) {
            $output = '';

            if ($request->categoryId != 'all') {
                $products = Product::where('sub_categories_id', '=', $request->categoryId)
                    ->get();
            } else {
                $products = Product::get();
            }

            if ($products->count() > 0) {
                foreach ($products as $product) {
                    $output .=
                        '<div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                        <img src="' . asset($product->images[0]) . '" alt="">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href="' . route('singleProduct', $product->id) . '"
                                               class="fs-5">' . $product->title_ar . '</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }
                return Response($output);
            } else {
                return response('no data', 404);
            }
        }
    } // end sortProduct
}
