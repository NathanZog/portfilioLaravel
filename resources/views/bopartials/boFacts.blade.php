@extends('template.mainBoTemplate')

@section('content')

<form class="mt-5 container d-flex flex-column" action="{{route('updateFacts', $dataFact[0]->id)}}" method="post" class="container">
    
    @csrf
    Description: <input class="mt-2 mb-2" type="text" value="{{$dataFact[0]->description}}" name="description">
    Happy Clients: <input class="mt-2 mb-2" type="number" value="{{$dataFact[0]->happy}}" name="happy">
    Projects: <input class="mt-2 mb-2" type="number" value="{{$dataFact[0]->projects}}" name="projects">
    Hours of Support: <input class="mt-2 mb-2" type="number" value="{{$dataFact[0]->hours}}" name="hours">
    Hard Workeres: <input class="mt-2 mb-2" type="number" value="{{$dataFact[0]->workers}}" name="workers">
    @method("PUT")
    <button class="btn btn-primary mt-3 mb-5" type="submit">Submit</button>
    </form> 

@endsection