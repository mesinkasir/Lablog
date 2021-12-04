<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Table;
use App\Category;
use App\Menu;
use App\Sale;
use App\Blog;
use App\About;
use App\Homepage;
// use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{

    public function index(){
        $categories = Category::all();
        return view('site.index')->with('categories', $categories);
    }

   

}
