<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/managements/{{$managementt->id}}" method="post">
  {{ method_field('PUT') }}
  @csrf
    <h2>Area</h2>
    <label for="name">Name</label>
    <input type="text" value="{{$managementt->name}}" name="name" required>
    
    <label for="address">Address</label>
    <input type="text" value="{{$managementt->address}}" name="address" required>
    
    <label for="text">Description</label>
    <input type="text" value="{{$managementt->phone}}" name="phone" required>
    
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection