<link rel="stylesheet" href="{{asset('css/show.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    <div class="card">
        <a href="">
          <h2></h2>
        <p class="p1">The Store ID:    {{$store->id}}</p>
        <p class="p2">Name of Store:   {{$store->name}}</p>
        <p class="p3">Description about Store:</br><br>{{$store->des}}</p>
        <a href="{{url("/stores/".$store->id."/edit")}}" class="p4">Update</a>
        <form action="{{url("/stores/".$store->id)}}">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        </a>
    </div>
</div>
@endsection