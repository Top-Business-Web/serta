<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArchitectureRequest;
use App\Http\Requests\UpdateArchitectureRequest;
use App\Models\Architecture;
use App\Models\CategoryArch;
use Illuminate\Http\Request;
use App\Traits\PhotoTrait;
use Yajra\DataTables\DataTables;

class ArchitectureController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $architectures = Architecture::latest()->get();
            return Datatables::of($architectures)
                ->addColumn('action', function ($architectures) {
                    return '
                                <button type="button" data-id="' . $architectures->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $architectures->id . '" data-title="' . $architectures->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('images', function ($architectures) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset($architectures->images[0]) . '">
                    ';
                })
                ->editColumn('categoryArch_id', function ($architectures) {
                    return $architectures->categoryArch->title_ar;
                })
                ->editColumn('sector', function ($architectures) {
                    if ($architectures->sector->value == 'public')
                        return 'عام';
                    elseif($architectures->sector->value == 'private')
                        return 'خاص';
                })
                ->editColumn('status', function ($architectures) {
                    if ($architectures->status == '0')
                        return 'غير مفعل';
                    else
                        return 'مفعل';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/architectures/index');
        }
    }

    public function create()
    {
        $data['arch_categories'] = CategoryArch::all();
        return view('admin/architectures/parts/create', compact('data'));
    }

    public function store(StoreArchitectureRequest $request)
    {
        $inputs = $request->all();

        if ($request->has('files')) {
            foreach ($request->file('files') as $file) {
                $inputs['images'][] = $this->saveImage($file, 'assets/uploads/architectures', 'photo');
            }
        }

        if ($request->has('items')) {
            $inputs['details'] = $request->items;
        }

        if (Architecture::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Architecture $architecture)
    {
        $categoryArch = CategoryArch::get();
        return view('admin/architectures/parts/edit', compact(['architecture', 'categoryArch']));
    }

    public function update(UpdateArchitectureRequest $request, $id)
    {
        try {
            $architecture = Architecture::findOrFail($id);
            $inputs = $request->all();

            if ($request->has('files')) {
                foreach ($request->file('files') as $file) {
                    $inputs['images'][] = $this->saveImage($file, 'assets/uploads/architecture', 'photo');
                }
            }

            if ($request->has('items')) {
                $inputs['details'] = $request->items;
            }

            if ($architecture->update($inputs)) {
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
        $architecture = Architecture::where('id', $request->id)->first();
        $architecture->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
