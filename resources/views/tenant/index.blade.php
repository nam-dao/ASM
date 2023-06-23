<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    @foreach ( $tenants as $tenant )
    <div class="card">
        <h2>Name: {{$tenant->name}}</h2>
      <p>Address: {{$tenant->address}}</p>
      <form action="{{url("/tenants/".$tenant->id)}}" method="post">
        {{ method_field('DELETE') }}
        @csrf
        <a href="{{url("/tenants/".$tenant->id)}}">View</a>
          <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
    </div>    
    @endforeach
</div>
@endsection



{{-- <label for="area" >Rent in the area</label>
        <select name="area" aria-label="Select Area">
            <option selected>Please choose one</option>
            @foreach ($areas as $area)
                <option {{ ($area->id == $tenant->area->id)?"selected":""}} value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>

        <label for="store" >Store name</label>
        <select name="store" aria-label="Select Store">
            <option selected>Please choose one</option>
            @foreach ($stores as $store)
                <option {{ ($store->id == $tenant->store->id)?"selected":""}} value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>

        <label for="manager">Managed by</label>
        <select name="manager" aria-label="Select Author">
            <option selected>Please choose one</option>
            @foreach ($managers as $manager)
                <option {{ ($manager->id == $tenant->manager->id)?"selected":""}} value="{{ $manager->id }}">{{ $manager->name }}</option>
            @endforeach
        </select> --}}