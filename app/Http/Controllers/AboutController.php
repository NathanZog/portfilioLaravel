<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $dataAbout = About::all();
        return view('bopartials.boAbout', compact('dataAbout'));
    }
    

    public function update(About $id, Request $request){

        $about = $id;
        $about->description = $request->description;
        $about->qualification = $request->qualification;
        $about->description2 = $request->description2;
        $about->birthday = $request->birthday;
        $about->siteweb = $request->siteweb;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->status = $request->status;
        $about->description3 = $request->description3;
        $about->save();
        return redirect()->back();
    }
}
