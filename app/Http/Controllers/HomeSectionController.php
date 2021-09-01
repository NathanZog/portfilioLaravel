<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index(){
        $dataHome = Home::all();
        return view('bopartials.boHome', compact('dataHome'));
    }


    public function update(Home $id, Request $request){
        
        $home = $id;
        $home->nom = $request->nom;
        $home->save();
        return redirect()->back();
    }
}
