<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CertificateController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $certificates = Certificate::latest()->get();
            return Datatables::of($certificates)
                ->addColumn('action', function ($certificates) {
                    $question = app()->getLocale() == 'ar' ? $certificates->question_ar : $certificates->question_en;
                    return '
                    <button type="button" data-id="' . $certificates->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal" data-id="' . $certificates->id . '" data-title="' . $question . '">
                        <i class="fas fa-trash"></i>
                    </button>
                ';
                })

                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/certificates/index');
        }
    }

    public function create()
    {
        return view('admin/certificates/parts/create');
    }

    public function store(StoreCertificateRequest $request)
    {
        try {
            $inputs = $request->all();

            if (Certificate::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(Certificate $certificate)
    {
        return view('admin/certificates/parts/edit', compact('certificate'));
    }

    public function update(UpdateCertificateRequest $request, $id)
    {
        try {
            $certificate = Certificate::findOrFail($id);
            $inputs = $request->all();

            if ($certificate->update($inputs)) {
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
        $certificate = Certificate::where('id', $request->id)->first();
        $certificate->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
