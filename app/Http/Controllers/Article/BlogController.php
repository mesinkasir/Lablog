<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
       $blogs = Blog::paginate(10);
        return view('article.blog')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('article.createBlog');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blogs|max:255',
            'description' => 'required|unique:blogs|max:255',
            'content' => 'required|unique:blogs|max:15000'
        ]);
        $imageName = "noimage.png";
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('blog_images'), $imageName);
        }
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $imageName;
        $blog->content = $request->content;
        $blog->save();
        $request->session()->flash('status', $request->title. ' Great...!! lets write again');
        return redirect('/article/blog');
    }

    public function show($id)
    {
        //
    }
   
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('article.editBlog')->with('blog',$blog);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        ]);
        $blog = Blog::find($id);
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            if($blog->image != "logo.png"){
                $imageName = $blog->image;
                unlink(public_path('blog_images').'/'.$imageName);
            }
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('blog_images'), $imageName);
        }else{
            $imageName = $blog->image;
        }

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $imageName;
        $blog->content = $request->content;
        $blog->save();
        $request->session()->flash('status', $request->name. ' Awesome broo...');
        return redirect('/article/blog');


    }

 
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if($blog->image != "noimage.png"){
            unlink(public_path('blog_images').'/'.$blog->image);
        }
        $blogTitle = $blog->title;
        $blog->delete();
        Session()->flash('status', $blogTitle. ' The Article is Die !!');
        return redirect('/article/blog');
    }
}
