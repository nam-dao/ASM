<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    @foreach ( $tenants as $tenant )
    <div class="card">
        <h2>The ID: {{$tenant->id}}</h2>
      <p>Name: {{$tenant->name}}</p>
      <form action="{{url("/tenants/".$tenant->id)}}" method="post">
        {{ method_field('DELETE') }}
        @csrf
        <a href="{{url("/tenants/".$tenant->id)}}">View</a>
          <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
    </div>    
    @endforeach
</div>
@endsection