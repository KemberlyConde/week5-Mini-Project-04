<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Chooks to Go'))</title>
    <meta name="description" content="@yield('meta_description', "Flame-grilled fresh every morning, never frozen. Order ahead, skip the line, and get your bucket while it's still smoking hot.")">

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDF8F2] text-[#1A1A1A] antialiased">
    @yield('content')
</body>
</html>
