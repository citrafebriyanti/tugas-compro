<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    public function index()
    {
      
        return view('backend.blog.index');
    }
    
    
    
}
