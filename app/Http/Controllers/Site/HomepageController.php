<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Homepage;

class HomepageController extends Controller
{

    public function index()
    {
       $homepages = Homepage::paginate(1);
        return view('site.homepage')->with('homepages', $homepages);
    }

    
}
