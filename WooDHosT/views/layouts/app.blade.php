<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WooDHosT Panel')</title>
    <link rel="stylesheet" href="{{ asset('themes/WooDHosT/assets/css/app.css') }}">
    <script src="{{ asset('themes/WooDHosT/assets/js/app.js') }}" defer></script>
</head>
<body>
    <header>
        <h1>WooDHosT Panel</h1>
    </header>
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
</html>
