<link rel="stylesheet" href="{{asset('css/show.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    <div class="card">
        <a href="">
          <h2></h2>
        <p class="p1">Name of Tenant:   {{$tenant->name}}</p>
        <p class="p2">Address of Tenant:   {{$tenant->address}}</p>
        <p class="p3">Phone about Tenant: {{$tenant->phone}}</p>
        <p class="p3">Rent store name: {{$tenant->store->name}} at {{$tenant->area->name}}</p>
        <p class="p3">Managed by: {{$tenant->manager->name}}</p>
        <a href="{{url("/tenants/".$tenant->id."/edit")}}" class="p4">Update</a>
        <form action="{{url("/tenants/".$tenant->id)}}" method="post">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        </a>
    </div>
</div>
@endsection