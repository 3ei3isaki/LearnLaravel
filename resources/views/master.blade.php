<!DOCTYPE html>
<html lang="vi">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mei News - @yield('title')</title>
     @include('components.common.head')
</head>

<body>
     @include('components.common.header')
     @yield('main')
     @include('components.common.footer')
     @include('components.common.js-include')
</body>

</html>