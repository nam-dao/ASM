<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/areas/{{$tenat->id}}" method="post">
  {{ method_field('PUT') }}
  @csrf
    <h2>Tenant</h2>
    <label for="name">Name</label>
    <input type="text" value="{{$tenat->name}}" name="name" required>
    
    <label for="">Address</label>
    <input type="text" name="{{$tenat->address}}" name="address" required>
    
    <label for="text">Phone</label>
    <input type="text" value="{{$tenat->phone}}" name="phone" required>
    
    <a href="/tenats" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection