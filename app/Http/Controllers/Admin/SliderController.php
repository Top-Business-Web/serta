<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlider;
use App\Http\Requests\UpdateSlider;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SliderController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $sliders = Slider::latest()->get();
            return Datatables::of($sliders)
                ->addColumn('action', function ($sliders) {
                    return '
                                <button type="button" data-id="' . $sliders->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $sliders->id . '" data-title="' . $sliders->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('image', function ($sliders) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset('assets/admin/Sliders/images/'. $sliders->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/sliders/index');
        }
    }

    public function create()
    {
        return view('admin/sliders/parts/create');
    }

    public function store(Request $request)
    {
        try {
            $inputs = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/sliders/images', $filename);
                $inputs['image'] = $filename;
            }

            if (Slider::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(Slider $slider)
    {
        return view('admin/sliders/parts/edit', compact('slider'));
    }

    public function update(UpdateSlider $request, $id)
    {
        try {
            $sliders = Slider::findOrFail($id);
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
        $sliders = Slider::where('id', $request->id)->first();
        $sliders->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
