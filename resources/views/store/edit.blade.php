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
    
    <label for="area_id">Area ID</label>
    <input type="text" value="{{$store->area_id}}" name="area_id" required>

    <label for="management_id">Management ID</label>
    <input type="text" value="{{$store->management_id}}" name="management_id" required>

    <label for="tenant_id">Tenant ID</label>
    <input type="text" value="{{$store->tenant_id}}" name="tenant_id" required>
      
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection