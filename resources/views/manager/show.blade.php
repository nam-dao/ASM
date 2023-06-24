<link rel="stylesheet" href="{{asset('css/show.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    <div class="card">
        <a href="">
          <h2></h2>
        <p class="p1">Name of manager:   {{$manager->name}}</p>
        <img src="{{url("/storage/".$manager->photo)}}" alt="">
        <p class="p2">Address of manager:   {{$manager->address}}</p>
        <p class="p3">Phone about manager:</br><br>{{$manager->phone}}</p>
        <a href="{{url("/managers/".$manager->id."/edit")}}" class="p4">Update</a>
        <form action="{{url("/managers/".$manager->id)}}" method="post">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        </a>
    </div>
</div>
@endsection