<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('templates.tpl_default')
@section('content')
<div class="main">
    @foreach ( $stores as $store )
    <div class="card">
        <h2>Name Store: {{$store->name}}</h2>
        @php
            $isRented = false;
        @endphp
        @foreach ($tenants as $tenant)
            @if ($tenant->id == $store->id)
                @php
                    $isRented = true;
                @endphp
                <p>Status: Already Rented</p>
                @break
            @endif
        @endforeach
        @if (!$isRented)
            <p>Status: No Tenants</p>
        @endif
      <form action="{{url("/stores/".$store->id)}}" method="post">
        {{ method_field('DELETE') }}
        @csrf
        <a href="{{url("/stores/".$store->id)}}">View</a>
          <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
    </div>    
    @endforeach
</div>
@endsection