<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        $dataSkill = Skill::all();
        return view('bopartials.boSkills', compact('dataSkill'));
    }

    public function update(Skill $id, Request $request){
        $skill = $id;
        $skill->description = $request->description;
        $skill->skill1 = $request->skill1;
        $skill->pctskill1 = $request->pctskill1;
        $skill->skill2 = $request->skill2;
        $skill->pctskill2 = $request->pctskill2;
        $skill->skill3 = $request->skill3;
        $skill->pctskill3 = $request->pctskill3;
        $skill->skill4 = $request->skill4;
        $skill->pctskill4 = $request->pctskill4;
        $skill->skill5 = $request->skill5;
        $skill->pctskill5 = $request->pctskill5;
        $skill->skill6 = $request->skill6;
        $skill->pctskill6 = $request->pctskill6;
        $skill->save();
        return redirect()->back();
    }
}
