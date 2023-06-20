<link rel="stylesheet" href="{{asset('css/show.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    <div class="card">
        <a href="">
          <h2></h2>
        <p class="p1">Name of management:   {{$management->name}}</p>
        <p class="p2">Address of management:   {{$management->address}}</p>
        <p class="p3">Phone about Management:</br><br>{{$management->phone}}</p>
        <a href="{{url("/managements/".$management->id."/edit")}}" class="p4">Update</a>
        <form action="{{url("/managements/".$management->id)}}" method="post">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        </a>
    </div>
</div>
@endsection