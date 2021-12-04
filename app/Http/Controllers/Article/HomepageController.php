<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Homepage;

class HomepageController extends Controller
{

    public function index()
    {
       $homepages = Homepage::paginate(1);
        return view('article.homepage')->with('homepages', $homepages);
    }

    public function create()
    {
        return view('article.createHomepage');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:homepages|max:255',
            'description' => 'required|unique:homepages|max:255',
            'content' => 'required|unique:homepages|max:15000',
            'section1' => 'required|unique:homepages|max:5000',
            'section2' => 'required|unique:homepages|max:5000',
            'section3' => 'required|unique:homepages|max:5000',
            'cover1' => 'required|unique:homepages|max:5000',
            'cover2' => 'required|unique:homepages|max:5000',
            'cover3' => 'required|unique:homepages|max:5000',
        ]);
        $imageName = "noimage.png";

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('homepage_images'), $imageName);
        }
        $homepage = new Homepage();
        $homepage->title = $request->title;
        $homepage->description = $request->description;
        $homepage->image = $imageName;
        $homepage->content = $request->content;
        $homepage->section1 = $request->section1;
        $homepage->cover1 = $request->cover1;
        $homepage->section2 = $request->section2;
        $homepage->cover2 = $request->cover2;
        $homepage->section3 = $request->section3;
        $homepage->cover3 = $request->cover3;
        $homepage->save();
        $request->session()->flash('status', $request->title. ' is saved successfully');
        return redirect('/article/homepage');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $homepage= Homepage::find($id);
        return view('article.editHomepage')->with('homepage',$homepage);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        ]);
        $homepage = Homepage::find($id);
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            if($homepage->image != "noimage.png"){
                $imageName = $homepage->image;
                unlink(public_path('homepage_images').'/'.$imageName);
            }
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('homepage_images'), $imageName);
        }else{
            $imageName = $homepage->image;
        }

        $homepage->title = $request->title;
        $homepage->description = $request->description;
        $homepage->image = $imageName;
        $homepage->content = $request->content;
        $homepage->section1 = $request->section1;
        $homepage->cover1 = $request->cover1;
        $homepage->section2 = $request->section2;
        $homepage->cover2 = $request->cover2;
        $homepage->section3 = $request->section3;
        $homepage->cover3 = $request->cover3;
        $homepage->save();
        $request->session()->flash('status', $request->name. ' is updated successfully');
        return redirect('/article');


    }


    public function destroy($id)
    {
        $homepage = Homepage::find($id);
        if($homepage->image != "noimage.png"){
            unlink(public_path('homepage_images').'/'.$homepage->image);
        }
        $homepageTitle = $homepage->title;
        $homepage->delete();
        Session()->flash('status', $homepageTitle. ' is deleted successfully');
        return redirect('/article/homepage');
    }
}
