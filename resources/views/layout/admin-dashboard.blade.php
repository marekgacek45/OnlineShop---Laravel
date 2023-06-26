<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop - @yield('subtitle')</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="admin-dashboard">
    <div class="admin-dashboard__container">

        @include('admin/components/sidebar')
        <main class="admin-dashboard__main">
            @yield('content')

        </main>
<div class="right">
    @yield('right')
</div>


    </div>
</body>

</html>
