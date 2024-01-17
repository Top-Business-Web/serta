<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaq;
use App\Http\Requests\UpdateFaq;
use App\Models\Faqs;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FaqController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $Faqs = Faqs::latest()->get();
            return Datatables::of($Faqs)
                ->addColumn('action', function ($Faqs) {
                    return '
                                <button type="button" data-id="' . $Faqs->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $Faqs->id . '" data-title="' . $Faqs->question . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/faqs/index');
        }
    }

    public function create()
    {
        return view('admin/faqs/parts/create');
    }

    public function store(StoreFaq $request)
    {
        try {
            $inputs = $request->all();

            if (Faqs::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(Faqs $faq)
    {
        return view('admin/faqs/parts/edit', compact('faq'));
    }

    public function update(UpdateFaq $request, $id)
    {
        try {
            $contacts = Faqs::findOrFail($id);
            $inputs = $request->all();

            if ($contacts->update($inputs)) {
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
        $careers = Faqs::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
