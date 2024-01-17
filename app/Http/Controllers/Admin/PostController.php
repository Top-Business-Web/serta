<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $posts = Post::latest()->get();
            return Datatables::of($posts)
                ->addColumn('action', function ($posts) {
                    return '
                                <button type="button" data-id="' . $posts->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $posts->id . '" data-title="' . $posts->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('image', function ($posts) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset('assets/admin/posts/images/' . $posts->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/posts/index');
        }
    }

    public function create()
    {
        return view('admin/posts/parts/create');
    }

    public function store(StorePost $request)
    {
        try {
            $inputs = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/posts/images', $filename);
                $inputs['image'] = $filename;
            }

            if (Post::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(Post $post)
    {
        return view('admin/posts/parts/edit', compact('post'));
    }

    public function update(UpdatePost $request, $id)
    {
        try {
            $contacts = Post::findOrFail($id);
            $inputs = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $file->move('assets/admin/posts/images', $filename);
                $inputs['image'] = $filename;
            }

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
        $careers = Post::where('id', $request->id)->first();
        $careers->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
