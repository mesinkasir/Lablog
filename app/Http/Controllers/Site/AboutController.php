<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{

    public function index()
    {
       $abouts = About::paginate(3);
        return view('site.about')->with('abouts', $abouts);
    }

    
}
