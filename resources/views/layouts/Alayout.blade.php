<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

            @if(Auth::check())
            <a class="nav-item nav-link active" href="{{route('article.index')}}">Index <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="{{route('article.create')}}">Create <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="{{route('logout')}}">Logout <span class="sr-only">(current)</span></a>
           @else
                <a class="nav-item nav-link active" href="{{route('login')}}">Login <span class="sr-only">(current)</span></a>

            @endif
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>