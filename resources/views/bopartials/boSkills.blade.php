@extends('template.mainBoTemplate')

@section('content')

<form class="mt-5 container d-flex flex-column" action="{{route('updateSkills', $dataSkill[0]->id)}}" method="post" class="container">
    
    @csrf
    Description: <input class="mt-2 mb-2" type="text" value="{{$dataSkill[0]->description}}" name="description">
    Skill 1: <input class="mt-2 mb-2" type="text" value="{{$dataSkill[0]->skill1}}" name="skill1">
    % Skill 1: <input class="mt-2 mb-2" type="number" value="{{$dataSkill[0]->pctskill1}}" name="pctskill1">
    Skill 2: <input class="mt-2 mb-2" type="text" value="{{$dataSkill[0]->skill2}}" name="skill2">
    % Skill 2: <input class="mt-2 mb-2" type="number" value="{{$dataSkill[0]->pctskill2}}" name="pctskill2">
    Skill 3: <input class="mt-2 mb-2" type="text" value="{{$dataSkill[0]->skill3}}" name="skill3">
    % Skill 3: <input class="mt-2 mb-2" type="number" value="{{$dataSkill[0]->pctskill3}}" name="pctskill3">
    Skill 4: <input class="mt-2 mb-2" type="text" value="{{$dataSkill[0]->skill4}}" name="skill4">
    % Skill 4: <input class="mt-2 mb-2" type="number" value="{{$dataSkill[0]->pctskill4}}" name="pctskill4">
    Skill 5: <input class="mt-2 mb-2" type="text" value="{{$dataSkill[0]->skill5}}" name="skill5">
    % Skill 5: <input class="mt-2 mb-2" type="number" value="{{$dataSkill[0]->pctskill5}}" name="pctskill5">
    Skill 6: <input class="mt-2 mb-2" type="text" value="{{$dataSkill[0]->skill6}}" name="skill6">
    % Skill 6: <input class="mt-2 mb-2" type="number" value="{{$dataSkill[0]->pctskill6}}" name="pctskill6">
    @method("PUT")
    <button class="btn btn-primary mt-3 mb-5" type="submit">Submit</button>
    </form> 

@endsection