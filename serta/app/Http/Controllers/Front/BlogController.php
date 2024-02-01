<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Post::all();
        return view('site.blog', compact('data'));
    }

    public function singleBlog($id)
    {
        $data['blog'] = Post::find($id);
        return view('site.blog-details', compact('data'));
    }
}
