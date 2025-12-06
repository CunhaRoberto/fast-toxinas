<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAST TOXINAS</title>

    <!-- Styles CSS -->
     <link rel="stylesheet" href="{{ asset('css/card.css') }}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="..." crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    @include('components.header')

    @yield('content', 'Nenhum conteúdo renderizado')
</body>
</html>
