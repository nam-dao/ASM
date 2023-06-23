<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@extends('templates.tpl_default')
@section('content')
    <div class="main">
        <a href="/managers">
            <div class="card">
                <h2>Management list</h2>
                <p>Show Management list</p>

            </div>
        </a>

        <a href="/tenants">
            <div class="card">

                <h2>Tenant list</h2>
                <p>Show Terant list</p>

            </div>
        </a>
        <a href="stores">
            <div class="card">

                <h2>Store list</h2>
                <p>Show Store list</p>

            </div>
        </a>

        <a href="/areas">
            <div class="card">

                <h2>Area list</h2>
                <p>Show Area list</p>

            </div>
        </a>
    </div>
@endsection
