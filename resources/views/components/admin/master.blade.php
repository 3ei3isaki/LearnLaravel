<!DOCTYPE html>
<html lang="vi">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="{{ asset('image/src/Logo.png') }}" type="image/x-icon">
     <title>Mei News - @yield('title')</title>
     @include('components.common.head')
     @include('components.admin.head')
</head>

<body class="fixed-nav sticky-footer bg-dark">
     @include('components.admin.header')
     @yield('main')
     @include('components.common.js-include')
     @include('components.admin.js-include')
</body>

</html>