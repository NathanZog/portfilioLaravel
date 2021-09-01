<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    public function index(){
        $dataFact = Fact::all();
        return view('bopartials.boFacts', compact('dataFact'));
    }

    public function update(Fact $id, Request $request){
        $fact = $id;
        $fact->description = $request->description;
        $fact->happy = $request->happy;
        $fact->projects = $request->projects;
        $fact->hours = $request->hours;
        $fact->workers = $request->workers;
        $fact->save();
        return redirect()->back();
    }
}
