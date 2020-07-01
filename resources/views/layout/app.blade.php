<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title> @yield('head-title') </title>
</head>

<body>

    @include('partials/header')
    @yield('content')
    @include('partials/footer')

    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</body>
</html>
