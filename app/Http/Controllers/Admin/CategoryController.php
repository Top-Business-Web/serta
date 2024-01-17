<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $categories = Category::latest()->get();
            return Datatables::of($categories)
                ->addColumn('action', function ($categories) {
                    return '
                                <button type="button" data-id="' . $categories->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $categories->id . '" data-title="' . $categories->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/categories/index');
        }
    }

    public function create()
    {
        return view('admin/categories/parts/create');
    }

    public function store(StoreCategory $request)
    {
        try {
            $inputs = $request->all();

            if (Category::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(Category $category)
    {
        return view('admin/categories/parts/edit', compact('category'));
    }

    public function update(UpdateCategory $request, $id)
    {
        try {
            $career = Category::findOrFail($id);
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
        $careers = Category::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
