<link rel="stylesheet" href="{{asset('css/show.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    <div class="card">
        <a href="">
          <h2></h2>
        <p class="p1">The Tenant ID:    {{$tenat->id}}</p>
        <p class="p2">Name of Tenant:   {{$tenat->name}}</p>
        <p class="p3">Phone about Tenant:</br><br>{{$tenat->des}}</p>
        <a href="{{url("/tenats/".$tenat->id."/edit")}}" class="p4">Update</a>
        <form action="{{url("/tenats/".$tenat->id)}}">
            {{ method_field('DELETE') }}
            @csrf
            <button>Delete</button>
        </form>
        </a>
    </div>
</div>
@endsection