<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Home;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $home = Home::all();
        $about = About::all();
        $fact = Fact::all();
        $skill= Skill::all();
        $service = Service::all();
        $contact = Contact::all();
        return view('pages/welcome', compact('home','about','fact','skill','service', 'contact'));
    }
}
