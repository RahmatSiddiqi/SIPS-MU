<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIPS-MU') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack ('custom-style')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-light border-bottom border-2 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand fs-4" href="#">
                    <img src="/build/assets/LOGO-MU.png" alt="Logo" width="85" height="55"
                        class="d-inline-block align-text-center ">
                    SIPS MISBAHUL ULUM
                </a>
                <div class="navbar-left" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active mx-3 fs-5" aria-current="page" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3 fs-5 " href="#visi-misi">Visi Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3 fs-5 " href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3 fs-5 " href="#sejarah">Sejarah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3 fs-5 " href="#kontak">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('beranda')
        </main>
    </div>
</body>

</html>
