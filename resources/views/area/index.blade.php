<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    @foreach ( $areas as $area )
    <div class="card">
        <h2>Type: {{$area->name}}</h2>
      <p>The ID: {{$area->id}}</p>
      <form action="{{url("/areas/".$area->id)}}" method="post">
        {{ method_field('DELETE') }}
        @csrf
        <a href="{{url("/areas/".$area->id)}}">View</a>
          <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
    </div>    
    @endforeach
</div>
@endsection