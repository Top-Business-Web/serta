<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BenefitStoreRequest;
use App\Http\Requests\BenefitUpdateRequest;
use App\Models\Benefits;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BenefitsController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $benefits = Benefits::latest()->get();
            return Datatables::of($benefits)
                ->addColumn('action', function ($benefits) {
                    return '
                                <button type="button" data-id="' . $benefits->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $benefits->id . '" data-title="' . $benefits->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('image', function ($benefits) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset('assets/admin/sliders/images/'. $benefits->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/benefits/index');
        }
    }

    public function create()
    {
        return view('admin/benefits/parts/create');
    }

    public function store(BenefitStoreRequest $request)
    {
        try {
            $inputs = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/sliders/images', $filename);
                $inputs['image'] = $filename;
            }

            if (Benefits::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(Benefits $benefit)
    {
        return view('admin/benefits/parts/edit', compact('benefit'));
    }

    public function update(BenefitUpdateRequest $request, $id)
    {
        try {
            $sliders = Benefits::findOrFail($id);
            $inputs = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/sliders/images', $filename);
                $inputs['image'] = $filename;
            }

            if ($sliders->update($inputs)) {
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
        $benefit = Benefits::where('id', $request->id)->first();
        $benefit->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
