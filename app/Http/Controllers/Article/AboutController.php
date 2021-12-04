<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // untuk nampilkan semua menu
       //  $menus = Menu::all();
       $abouts = About::paginate(5);
        return view('article.about')->with('abouts', $abouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.createAbout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $request->validate([
        ]);
        $imageName = "logo.png";
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('about_images'), $imageName);
        }
        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->image = $imageName;
        $about->content = $request->content;
        $about->save();
        $request->session()->flash('status', $request->title. ' Great !!');
        return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('article.editAbout')->with('about',$about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // information validation
        $request->validate([
        ]);
        $about = About::find($id);
        // validate if a user upload image
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            if($about->image != "logo.png"){
                $imageName = $about->image;
                unlink(public_path('about_images').'/'.$imageName);
            }
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('about_images'), $imageName);
        }else{
            $imageName = $about->image;
        }

        $about->title = $request->title;
        $about->description = $request->description;
        $about->image = $imageName;
        $about->content = $request->content;
        $about->save();
        $request->session()->flash('status', $request->name. ' Wow.. Cool !!');
        return redirect('/article');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        if($about->image != "logo.png"){
            unlink(public_path('about_images').'/'.$about->image);
        }
        $aboutTitle = $about->title;
        $about->delete();
        Session()->flash('status', $aboutTitle. ' is deleted successfully');
        return redirect('/article/about');
    }
}
