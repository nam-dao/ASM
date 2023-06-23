<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/areas" method="post">
  @csrf
    <h2>Area</h2>
    <label for="name" >Name</label>
        <select name="name" aria-label="Select Area" required>
            <option selected>Please choose one</option>
            <option>VIP Area</option>
            <option>Normal Area</option>
        </select>
           
    <label for="description">Descripton</label>
    <input type="text" name="des" required>
    
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection