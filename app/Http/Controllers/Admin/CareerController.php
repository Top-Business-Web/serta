<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareer;
use App\Http\Requests\UpdateCareer;
use App\Models\Career;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CareerController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $careers = Career::latest()->get();
            return Datatables::of($careers)
                ->addColumn('action', function ($careers) {
                    return '
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $careers->id . '" data-title="' . $careers->name . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('file',function($careers){
                    return '<a class="btn btn-sm btn-info" href="'. asset($careers->file) .'" target="_blank">CV</a>';
                })
                ->editColumn('email',function($careers){
                    return '<a class="btn btn-sm btn-primary" href="mailto:'.$careers->email .'" target="_blank">'. $careers->email .'</a>';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/careers/index');
        }
    }

    public function destroy(Request $request)
    {
        $careers = Career::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
