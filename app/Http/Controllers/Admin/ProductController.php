<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Models\Product;
use App\Models\SubCategory;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $products = Product::latest()->get();
            return Datatables::of($products)
                ->addColumn('action', function ($products) {
                    return '
                                <button type="button" data-id="' . $products->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $products->id . '" data-title="' . $products->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('images', function ($products) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset($products->images[0]) . '">
                    ';
                })
                ->editColumn('sub_categories_id', function ($products) {
                    return $products->subCategory->title_ar;
                })
                ->editColumn('sector', function ($products) {
                    if ($products->sector == 'public')
                        return 'عام';
                    elseif($products->sector == 'private')
                        return 'خاص';
                })
                ->editColumn('status', function ($products) {
                    if ($products->status == '0')
                        return 'غير مفعل';
                    else
                        return 'مفعل';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/products/index');
        }
    }

    public function create()
    {
        $data['sub_categories'] = SubCategory::all();
        return view('admin/products/parts/create', compact('data'));
    }

    public function store(StoreProduct $request)
    {
        $inputs = $request->all();

        if ($request->has('files')) {
            foreach ($request->file('files') as $file) {
                $inputs['images'][] = $this->saveImage($file, 'assets/uploads/products', 'photo');
            }
        }

        if ($request->has('items')) {
            $inputs['details'] = $request->items;
        }

        if (Product::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Product $product)
    {
        $sub_categories = SubCategory::get();
        return view('admin/products/parts/edit', compact(['product', 'sub_categories']));
    }

    public function update(UpdateProduct $request, $id)
    {
        try {
            $contacts = Product::findOrFail($id);
            $inputs = $request->all();

            if ($request->has('files')) {
                foreach ($request->file('files') as $file) {
                    $inputs['images'][] = $this->saveImage($file, 'assets/uploads/products', 'photo');
                }
            }

            if ($request->has('items')) {
                $inputs['details'] = $request->items;
            }

            if ($contacts->update($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        $careers = Product::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
