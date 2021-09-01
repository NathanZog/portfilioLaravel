<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $dataService = Service::all();
        return view('bopartials.boServices', compact('dataService'));
    }

    public function update(Service $id, Request $request){
        $service = $id;
        $service->description = $request->description;
        $service->subtitle1 = $request->subtitle1;
        $service->sub1description = $request->sub1description;
        $service->subtitle2 = $request->subtitle2;
        $service->sub2description = $request->sub2description;
        $service->subtitle3 = $request->subtitle3;
        $service->sub3description = $request->sub3description;
        $service->subtitle4 = $request->subtitle4;
        $service->sub4description = $request->sub4description;
        $service->subtitle5 = $request->subtitle5;
        $service->sub5description = $request->sub5description;
        $service->subtitle6 = $request->subtitle6;
        $service->sub6description = $request->sub6description;
        $service->save();
        return redirect()->back();
    }
}
