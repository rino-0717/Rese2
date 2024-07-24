<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layouts/header.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>

<body>
    <header>
        <form id="logo-form" action="{{ auth()->check() ? route('menu') : route('menu2') }}" method="GET" class="logo">
            @csrf
            <div class="logo-icon" onclick="document.getElementById('logo-form').submit();">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="logo-text" onclick="document.getElementById('logo-form').submit();">Rese</div>
        </form>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>