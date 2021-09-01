@extends('template.mainBoTemplate')

@section('content')

<form class="mt-5 container d-flex flex-column" action="{{route('updateHome', $dataHome[0]->id)}}" method="post" class="container">
    
    @csrf
    Nom: <input class="mt-2 mb-2" type="text" value="{{$dataHome[0]->description}}" name="nom">
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </form>

@endsection