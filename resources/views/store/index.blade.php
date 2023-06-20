<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    @foreach ( $stores as $store )
    <div class="card">
        <h2>The ID: {{$store->id}}</h2>
      <p>Name: {{$store->name}}</p>
      <form action="{{url("/stores/".$store->id)}}" method="post">
        {{ method_field('DELETE') }}
        @csrf
        <a href="{{url("/stores/".$store->id)}}">View</a>
          <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
    </div>    
    @endforeach
</div>
@endsection