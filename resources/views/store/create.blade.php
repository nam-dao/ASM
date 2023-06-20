<link rel="stylesheet" href="{{asset('css/create.css')}}">
@extends('templates.tpl_default')
@section('content')
<form action="/stores" method="post">
  @csrf
    <h2>Store</h2>
    <label for="name">Name</label>
    <input type="text" name="name" required>
    
    <label for="description">Descripton</label>
    <input type="text" name="des" required>

    <label for="area_id">Area ID</label>
    <input type="text" name="area_id" required>

    <label for="management_id">Management ID</label>
    <input type="text" name="management_id" required>

    <label for="tenant_id">Tenant ID</label>
    <input type="text" name="tenant_id" required>
    
    <a href="/areas" class="exit">Cancel</a>
    <input type="submit" value="Submit">
  </form>
@endsection