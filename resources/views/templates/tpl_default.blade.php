<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tpl_default.css')}}">
    <title>Shopping Mall Management</title>
</head>
<body>
    <div class="header">
        <h1>Shopping Mall Management</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="/">Home Page</a></li>
            <li><a href="/managers/create">Add Management</a></li>
            <li><a href="/tenants/create">Add Terant</a></li>
            <li><a href="/stores/create">Add Store</a></li>
            <li><a href="/areas/create">Add Area</a></li>
        </ul>
    </div>
    @yield('content')
    <footer>
        <p>Copyright &copy; 2023 Shopping Mall Management</p>
    </footer>
</body>
</html>