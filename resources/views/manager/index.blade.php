<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    @foreach ( $managers as $manager )
    <div class="card">
        <h2>The Name Manager : {{$manager->name}}</h2>
      <p>Phone: {{$manager->phone}}</p>
      <form action="{{url("/managers/".$manager->id)}}" method="post">
        {{ method_field('DELETE') }}
        @csrf
        <a href="{{url("/managers/".$manager->id)}}">View</a>
          <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
    </div>    
    @endforeach
</div>
@endsection