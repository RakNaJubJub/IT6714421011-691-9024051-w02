<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-amber-100">
    <div class="flex flex-col">
        <div class="text-center text-xl font-bold">@yield('menu')</div>
        <div>@yield('coutent')</div>
        <div>@yield('footer')</div>
    </div>
</body>
</html>