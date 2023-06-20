<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/areas" method="post">
  @csrf
    <h2>Area</h2>
    <label for="name">Name</label>
    <input type="text" name="name" required>
    
    <label for="address">Address</label>
    <input type="text" name="address" required>
    
    <label for="Phone">Phone</label>
    <input type="text" name="phone" required>
    
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection