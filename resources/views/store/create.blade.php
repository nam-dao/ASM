<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/stores" method="post">
  @csrf
    <h2>Store</h2>
    <label for="name">Name</label>
    <input type="text" name="name" required>

    <label for="phone">Phone</label>
    <input type="text" name="phone" required>
    
    <label for="description">Descripton</label>
    <input type="text" name="des" required>
    
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection