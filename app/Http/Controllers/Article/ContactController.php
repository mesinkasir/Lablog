<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contacts = Contact::paginate(10);
        return view('article.contact')->with('contacts', $contacts);
    }

   
    public function create()
    {
        return view('article.createContact');
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
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->whatsapp = $request->whatsapp;
        $contact->map = $request->map;
        $contact->email = $request->email;
        $contact->street = $request->street;
 //       $contact->image = $request->imageName;
        $contact->save();
        $request->session()->flash('status', $request->title. ' is saved successfully');
        return redirect('/article/contact');
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
        $contact = Contact::find($id);
        return view('article.editContact')->with('contact',$contact);
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
 //           'image' => 'unique:contacts|max:15000'
        ]);
        $contact = Contact::find($id);

        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->whatsapp = $request->whatsapp;
        $contact->map = $request->map;
        $contact->email = $request->email;
        $contact->street = $request->street;
        $contact->save();
        $request->session()->flash('status', $request->name. ' is updated successfully');
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
        $contact = Contact::find($id);
        $contactTitle = $contact->title;
        $contact->delete();
        Session()->flash('status', $contactTitle. ' is deleted successfully');
        return redirect('/article/contact');
    }
}
