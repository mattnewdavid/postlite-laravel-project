<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite Posts</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex mb-6 justify-between">
        <ul class="flex item-center">
            
            <li>
                <a href="{{ route('home') }}" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">Post</a>
            </li>
        </ul>
        <ul class="flex item-center">

            @auth
            <li>
                <a href="" class="p-3">{{auth()->user()->name}}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="inline p-3">
                    @csrf
                     <button type="submit">Logout</button>
                </form> 
            </li>
            @endauth

            @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Log in</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
           
            @endguest
           
           
        </ul>
    </nav>
    @yield('content')
</body>
</html>