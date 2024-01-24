<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    // public function __invoke(){
    //     $blogs = Blog::all();
    //     $latest_blogs = Blog::latest()->take(4)->get();
    //     $about = About::all()->first();
    //     return view('Site/blogs',['about'=>$about,'blogs'=>$blogs,'latest_blogs'=>$latest_blogs]);
    // }

    public function index(Request $request){
        $blogs = Blog::all();
        $latest_blogs = Blog::latest()->take(4)->get();
        $about = About::all()->first();
        return view('Site/blogs',['about'=>$about,'blogs'=>$blogs,'latest_blogs'=>$latest_blogs]);
    }

    public function blogDesc($slug)
    {
        $un_slug = Str::slug($slug, ' ');
        $capital_title = ucwords($un_slug);
        // dd($capital_title);
        $blog = Blog::where('title', 'like', '%'.$capital_title .'%')->first();
        $latest_blogs = Blog::latest()->take(4)->get();
        $about = About::all()->first();
        return view('Site/blog_description',['about'=>$about,'blog'=>$blog, 'latest_blogs'=>$latest_blogs]);
    }

//    =====================================================

}