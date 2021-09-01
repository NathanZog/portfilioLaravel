@extends('template.mainBoTemplate')

@section('content')

<form class="mt-5 container d-flex flex-column" action="{{route('updateAbout', $dataAbout[0]->id)}}" method="post" class="container">
    
    @csrf
    Description: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->description}}" name="description">
    Qualification: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->qualification}}" name="qualification">
    Description 2: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->description2}}" name="description2">
    Birthday: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->birthday}}" name="birthday">
    SiteWeb: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->siteweb}}" name="siteweb">
    Phone: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->phone}}" name="phone">
    City: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->city}}" name="city">
    Age: <input class="mt-2 mb-2" type="number" value="{{$dataAbout[0]->age}}" name="age">
    Degree : <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->degree}}" name="degree">
    Email: <input class="mt-2 mb-2" type="email" value="{{$dataAbout[0]->email}}" name="email">
    Status: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->status}}" name="status">
    Description 3: <input class="mt-2 mb-2" type="text" value="{{$dataAbout[0]->description3}}" name="description3">
    @method("PUT")
    <button class="btn btn-primary mt-3 mb-5" type="submit">Submit</button>
    </form> 

@endsection