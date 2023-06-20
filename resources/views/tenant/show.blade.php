<link rel="stylesheet" href="{{asset('css/show.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    <div class="card">
        <a href="">
          <h2></h2>
        <p class="p1">The Tenant ID:    {{$tenant->id}}</p>
        <p class="p2">Name of Tenant:   {{$tenant->name}}</p>
        <p class="p3">Phone about Tenant:</br><br>{{$tenant->des}}</p>
        <a href="{{url("/tenants/".$tenat->id."/edit")}}" class="p4">Update</a>
        <form action="{{url("/tenants/".$tenant->id)}}">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        </a>
    </div>
</div>
@endsection