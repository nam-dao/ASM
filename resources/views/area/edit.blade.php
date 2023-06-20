<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/areas/{{$area->id}}" method="post">
  {{ method_field('PUT') }}
  @csrf
    <h2>Area</h2>
    <label for="name">Name</label>
    <input type="text" value="{{$area->name}}" name="name" required>
    
    {{-- <label for="id"></label>
    <input type="text" name="" required> --}}
    
    <label for="text">Description</label>
    <input type="text" value="{{$area->des}}" name="des" required>
    
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection