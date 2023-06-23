<link rel="stylesheet" href="{{asset('css/show.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    <div class="card">
        <a href="">
          <h2></h2>
        <p class="p1">Name of Store:   {{$store->name}}</p>
        @php
            $isRented = false;
        @endphp
        @foreach ($tenants as $tenant)
            @if ($tenant->id == $store->id)
                @php
                    $isRented = true;
                @endphp
                <p class="p2">Status: Already Rented</p>
                @break
            @endif
        @endforeach
        @if (!$isRented)
            <p class="p2">Status: No Tenants</p>
        @endif
        <p class="p3">Description about Store:</br><br>{{$store->des}}</p>
        <a href="{{url("/stores/".$store->id."/edit")}}" class="p4">Update</a>
        <form action="{{url("/stores/".$store->id)}}" method="post">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        </a>
    </div>
</div>
@endsection