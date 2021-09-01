@extends('template.mainBoTemplate')

@section('content')

<form class="mt-5 container d-flex flex-column" action="{{route('updateContact', $dataContact[0]->id)}}" method="post" class="container">
    
    @csrf
    Description: <input class="mt-2 mb-2" type="text" value="{{$dataContact[0]->description}}" name="description">
    Location: <input class="mt-2 mb-2" type="text" value="{{$dataContact[0]->location}}" name="location">
    Email: <input class="mt-2 mb-2" type="email" value="{{$dataContact[0]->email}}" name="email">
    Phone: <input class="mt-2 mb-2" type="text" value="{{$dataContact[0]->phone}}" name="phone">
    @method("PUT")
    <button class="btn btn-primary mt-3 mb-5" type="submit">Submit</button>
    </form> 

@endsection