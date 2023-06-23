<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/managers/{{$manager->id}}" method="post">
  {{ method_field('PUT') }}
  @csrf
    <h2>Area</h2>
    <label for="name">Name</label>
    <input type="text" value="{{$manager->name}}" name="name" required>
    
    <label for="address">Address</label>
    <input type="text" value="{{$manager->address}}" name="address" required>
    
    <label for="text">Description</label>
    <input type="text" value="{{$manager->phone}}" name="phone" required>
    
    <a href="/managers" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection