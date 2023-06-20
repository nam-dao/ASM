<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/tenants/{{$tenant->id}}" method="post">
  {{ method_field('PUT') }}
  @csrf
    <h2>Tenant</h2>
    <label for="name">Name</label>
    <input type="text" value="{{$tenant->name}}" name="name" required>
    
    <label for="">Address</label>
    <input type="text" value="{{$tenant->address}}" name="address" required>
    
    <label for="text">Phone</label>
    <input type="text" value="{{$tenant->phone}}" name="phone" required>
    
    <a href="/tenats" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection