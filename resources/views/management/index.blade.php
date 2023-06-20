<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    @foreach ( $management as $managementt )
    <div class="card">
        <h2>The Management ID: {{$managementt->id}}</h2>
      <p>Name: {{$managementt->name}}</p>
      <form action="{{url("/managements/".$managementt->id)}}" method="post">
        {{ method_field('DELETE') }}
        @csrf
        <a href="{{url("/managements/".$managementt->id)}}">View</a>
          <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
    </div>    
    @endforeach
</div>
@endsection