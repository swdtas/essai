<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact = new contact();
        $contact->nom = $request->input('nom');
        $contact->email = $request->input('email');
        $contact->message= $request->input('message');
        $contact->save();
    }

    public function show($id)
    {
        $contact= contact::find($id);
        return view('contact.show', ['contact' => $contact]); 
    }

}
