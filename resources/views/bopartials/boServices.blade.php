@extends('template.mainBoTemplate')

@section('content')

<form class="mt-5 container d-flex flex-column" action="{{route('updateService', $dataService[0]->id)}}" method="post" class="container">
    
    @csrf
    Description: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->description}}" name="description">
    Subtitle 1: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->subtitle1}}" name="subtitle1">
    Subtitle 1 Description: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->sub1description}}" name="sub1description">
    Subtitle 2: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->subtitle2}}" name="subtitle2">
    Subtitle 2 Description: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->sub2description}}" name="sub2description">
    Subtitle 3: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->subtitle3}}" name="subtitle3">
    Subtitle 3 Description: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->sub3description}}" name="sub3description">
    Subtitle 4: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->subtitle4}}" name="subtitle4">
    Subtitle 4 Description: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->sub4description}}" name="sub4description">
    Subtitle 5: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->subtitle5}}" name="subtitle5">
    Subtitle 5 Description: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->sub5description}}" name="sub5description">
    Subtitle 6: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->subtitle6}}" name="subtitle6">
    Subtitle 6 Description: <input class="mt-2 mb-2" type="text" value="{{$dataService[0]->sub6description}}" name="sub6description">
    <button class="btn btn-primary mt-3 mb-5" type="submit">Submit</button>
    </form> 

@endsection