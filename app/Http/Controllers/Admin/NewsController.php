<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NewsController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $news = News::latest()->get();
            return Datatables::of($news)
                ->addColumn('action', function ($news) {
                    return '
                                <button type="button" data-id="' . $news->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $news->id . '" data-title="' . $news->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('image', function ($news) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset('assets/admin/sliders/images/' . $news->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/news/index');
        }
    }

    public function create()
    {
        return view('admin/news/parts/create');
    }

    public function store(StoreNewsRequest $request)
    {
        try {
            $inputs = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/sliders/images', $filename);
                $inputs['image'] = $filename;
            }

            if (News::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(News $news)
    {
        return view('admin/news/parts/edit', compact('news'));
    }

    public function update(UpdateNewsRequest $request, $id)
    {
        try {
            $news = News::findOrFail($id);
            $inputs = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/sliders/images', $filename);
                $inputs['image'] = $filename;
            }

            if ($news->update($inputs)) {
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
        $news = News::where('id', $request->id)->first();
        $news->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
