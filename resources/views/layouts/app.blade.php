<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="text-white bg-gray-900">
    <div class="container px-4 mx-auto font-nunito">
        @yield('content')
    </div>
</body>

</html>