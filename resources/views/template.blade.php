<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <h1>Sistema</h1>
    <p>
     
        <a href="{{route('clientes')}}">Clientes</a>
        <a href="{{route('aquabonos')}}">Aquabonos</a>
        @auth
        <a href="{{route('dashboard')}}">Dashboard</a>
        @else
        <a href="{{ route('login')}}">Login</a>
        @endauth
    </p>
    <hr>

    @yield('content')
    
</body>
</html>