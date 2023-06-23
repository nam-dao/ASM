<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/managers" method="post">
  @csrf
    <h2>Manager</h2>
    <label for="name">Name</label>
    <input type="text" name="name" required>
    
    <label for="address">Address</label>
    <input type="text" name="address" required>
    
    <label for="phone">Phone</label>
    <input type="text" name="phone" required>
    
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection