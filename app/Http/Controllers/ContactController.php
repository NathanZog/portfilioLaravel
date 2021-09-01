<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $dataContact = Contact::all();
        return view('bopartials.boContact', compact('dataContact'));
    }

    public function update(Contact $id, Request $request){
        $contact = $id;
        $contact->description = $request->description;
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();
        return redirect()->back();
    }
}
