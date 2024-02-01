<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreService;
use App\Http\Requests\UpdateService;
use App\Models\Service;
use App\Models\SubCategory;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $services = Service::latest()->get();
            return Datatables::of($services)
                ->addColumn('action', function ($services) {
                    return '
                    <button type="button" data-id="' . $services->id . '" class="btn btn-pill btn-info-light editBtn">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                            data-id="' . $services->id . '" data-title="' . $services->title_ar . '">
                        <i class="fas fa-trash"></i>
                    </button>
                ';
                })

                ->editColumn('images', function ($services) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset($services->images[0]) . '">
                    ';
                })
                ->editColumn('image_logo', function ($services) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset($services->image_logo) . '">
                    ';
                })
                ->editColumn('desc_en', function ($services) {
                    $limitedDesc = substr($services->desc_ar, 0, 30);
                    
                    return $limitedDesc;
                })
                
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/services/index');
        }
    }

    public function create()
    {
        $data['categories'] = Service::all();
        return view('admin/services/parts/create', compact('data'));
    }

    public function store(StoreService $request)
    {
        $inputs = $request->all();
        if ($request->has('files')) {
            foreach ($request->file('files') as $file) {
                $inputs['images'][] = $this->saveImage($file, 'assets/uploads/services', 'photo');
            }
        }
        if ($request->has('image_logo')) {
            $inputs['image_logo'] = $this->saveImage($request->image_logo, 'assets/uploads/services', 'photo');
        }

        if (Service::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Service $service)
    {
        $data['categories'] = Service::all();
        return view('admin/services/parts/edit', compact('service', 'data'));
    }

    public function update(UpdateService $request, $id)
    {
        try {
            $services = Service::findOrFail($id);
            $inputs = $request->all();

            if ($request->has('files')) {
                foreach ($request->file('files') as $file) {
                    $inputs['images'][] = $this->saveImage($file, 'assets/uploads/services', 'photo');
                }
            }

            if ($request->has('image_logo')) {
                $inputs['image_logo'] = $this->saveImage($request->image_logo, 'assets/uploads/services', 'photo');
            }

            if ($services->update($inputs)) {
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
        $careers = Service::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
