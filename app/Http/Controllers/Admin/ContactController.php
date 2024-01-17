<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContact;
use App\Http\Requests\UpdateContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContactController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $contacts = Contact::latest()->get();
            return Datatables::of($contacts)
                ->addColumn('action', function ($contacts) {
                    return '
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $contacts->id . '" data-title="' . $contacts->name . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                                <button type="button" data-id="' . $contacts->id . '" class="btn btn-pill btn-success-light editBtn"><i class="fa fa-eye"></i></button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/contacts/index');
        }
    }

    public function edit(Contact $contact)
    {
        return view('admin/contacts/show', compact('contact'));
    }


    public function destroy(Request $request)
    {
        $careers = Contact::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
