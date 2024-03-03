<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArchitectureRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ArchController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $architectureRequests = ArchitectureRequest::latest()->get();
            return Datatables::of($architectureRequests)
                ->addColumn('action', function ($architectureRequests) {
                    return '
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $architectureRequests->id . '" data-title="' . $architectureRequests->name . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('email', function ($architectureRequests) {
                    return '<a class="btn btn-sm btn-primary" href="mailto:' . $architectureRequests->email . '" target="_blank">' . $architectureRequests->email . '</a>';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/arch_requests/index');
        }
    }

    public function destroy(Request $request)
    {
        $architectureRequests = ArchitectureRequest::where('id', $request->id)->first();
        $architectureRequests->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
