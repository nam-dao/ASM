<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/managers" method="post" enctype="multipart/form-data">
  @csrf
    <h2>Manager</h2>
    <label for="name">Name</label>
    <input type="text" name="name" required>
    
    <label for="address">Address</label>
    <input type="text" name="address" required>
    
    <label for="phone">Phone</label>
    <input type="text" name="phone" required>

    <label for="photo">Photo</label>
    <input class="photo" type="file" name="photo" required>
    
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection