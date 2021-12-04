<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{

    public function index()
    {
       $blogs = Blog::paginate(1);
        return view('site.blog')->with('blogs', $blogs);
    }

}
