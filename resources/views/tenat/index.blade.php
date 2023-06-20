<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    @foreach ( $tenats as $tenat )
    <div class="card">
        <h2>The ID: {{$tenat->id}}</h2>
      <p>Name: {{$tenat->name}}</p>
      <form action="{{url("/tenats/".$tenat->id)}}" method="post">
        {{ method_field('DELETE') }}
        @csrf
        <a href="{{url("/tenats/".$tenat->id)}}">View</a>
          <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
    </div>    
    @endforeach
</div>
@endsection