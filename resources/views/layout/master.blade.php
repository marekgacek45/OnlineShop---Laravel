<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop - @yield('subtitle')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('components/navigation')

    @yield('content')

    @include('components/footer')
</body>

</html>
