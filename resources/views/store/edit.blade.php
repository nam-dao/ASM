<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/stores/{{$store->id}}" method="post">
  {{ method_field('PUT') }}
  @csrf
    <h2>Area</h2>
    <label for="name">Name</label>
    <input type="text" value="{{$store->name}}" name="name" required>

    <label for="text">Description</label>
    <input type="text" value="{{$store->des}}" name="des" required>
       
    <a href="/stores" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection