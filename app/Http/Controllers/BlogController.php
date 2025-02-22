<?php

namespace App\Http\Controllers;
use App\Models\Blogs;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::orderBy('id','desc')->get();
        $blog_terbaru = Blogs::orderBy('id', 'desc')->limit(3)->get();
        $blog_lainnya = Blogs::orderBy('id','desc')->get();
        return view('blog', [
            'blogs' => $blogs,
            'blog_terbaru' => $blog_terbaru,
            'blog_lainnya' => $blog_lainnya,
        ]);
    }
}
