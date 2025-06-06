<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Document</title>
    @stack('css')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('governorate.create') }}">Add governorate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('governorate.index') }}">display governorate</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('place.create') }}">Add place</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('place.create') }}">display place</a>
                    </li>



                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- <div class="container">
        @yield('content')
    {{-- @yield('about')
    @yield('newpage')
    @yield('addpost') --}}
    {{-- <script src="{{ asset('js/bootstrap.js') }}"></script>
    @stack('js') --}}
</body>

</html>
