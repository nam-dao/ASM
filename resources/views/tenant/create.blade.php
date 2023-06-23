<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@extends('templates.tpl_default')
@section('content')
    <form action="/tenants" method="post">
        @csrf
        <h2>Tenant</h2>
        <label for="name">Name</label>
        <input type="text" name="name" required>

        <label for="address">Address</label>
        <input type="text" name="address" required>

        <label for="Phone">Phone</label>
        <input type="text" name="phone" required>

        <label for="area" >Rent in the area</label>
        <select name="area" aria-label="Select Area">
            <option selected>Please choose one</option>
            @foreach ($areas as $area)
                <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>

        <label for="store" >Store name</label>
        <select name="store" aria-label="Select Store">
            <option selected>Please choose one</option>
            @foreach ($stores as $store)
                <option value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>

        <label for="manager">Managed by</label>
        <select name="manager" aria-label="Select Author">
            <option selected>Please choose one</option>
            @foreach ($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
            @endforeach
        </select>

        <a href="/tenants" class="exit">Cancel</a>
        <input type="submit" value="Submit">
    </form>
@endsection
