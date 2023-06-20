<link rel="stylesheet" href="{{asset('css/show.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    <div class="card">
        <a href="">
          <h2></h2>
        <p class="p1">The area ID:    {{$area->id}}</p>
        <p class="p2">Name of Area:   {{$area->name}}</p>
        <p class="p3">Description about Area:</br><br>{{$area->des}}</p>
        <a href="{{url("/areas/".$area->id."/edit")}}" class="p4">Update</a>
        <form action="{{url("/areas/".$area->id)}}" method="post">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        </a>
    </div>
</div>
@endsection