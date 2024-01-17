<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubCategory;
use App\Http\Requests\UpdateCategory;
use App\Http\Requests\UpdateSubCategory;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SubCategoryController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $sub_categories = SubCategory::latest()->get();
            return Datatables::of($sub_categories)
                ->addColumn('action', function ($sub_categories) {
                    return '
                                <button type="button" data-id="' . $sub_categories->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $sub_categories->id . '" data-title="' . $sub_categories->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('category_id',function ($category){
                    return $category->category->title_ar;
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/sub_categories/index');
        }
    }

    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin/sub_categories/parts/create', compact('data'));
    }

    public function store(StoreSubCategory $request)
    {
        try {
            $inputs = $request->all();

            if (SubCategory::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(SubCategory $subcategory)
    {
        $data['categories'] = Category::all();
        return view('admin/sub_categories/parts/edit', compact('subcategory', 'data'));
    }

    public function update(UpdateCategory $request, $id)
    {
        try {
            $career = SubCategory::findOrFail($id);
            $inputs = $request->all();

            if ($career->update($inputs)) {
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
        $careers = SubCategory::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
