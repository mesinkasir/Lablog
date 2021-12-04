<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;
use App\Contact;

class ContactController extends Controller
{

    public function index()
    {
       $contacts = Contact::paginate(3);
        return view('site.contact')->with('contacts', $contacts);
    }

    
}
