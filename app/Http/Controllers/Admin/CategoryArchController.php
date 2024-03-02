<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryArchRequest;
use App\Http\Requests\UpdateCategoryArchRequest;
use App\Models\CategoryArch;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryArchController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $category_arch = CategoryArch::latest()->get();
            return Datatables::of($category_arch)
                ->addColumn('action', function ($category_arch) {
                    return '
                                <button type="button" data-id="' . $category_arch->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $category_arch->id . '" data-title="' . $category_arch->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/category_archs/index');
        }
    }

    public function create()
    {
        return view('admin/category_archs/parts/create');
    }

    public function store(StoreCategoryArchRequest $request)
    {
        try {
            $inputs = $request->all();

            if (CategoryArch::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(CategoryArch $categories_arch)
    {
        return view('admin/category_archs/parts/edit', compact('categories_arch'));
    }

    public function update(UpdateCategoryArchRequest $request, $id)
    {
        try {
            $categoryArch = CategoryArch::findOrFail($id);
            $inputs = $request->all();

            if ($categoryArch->update($inputs)) {
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
        $categoryArch = CategoryArch::where('id', $request->id)->first();
        $categoryArch->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
