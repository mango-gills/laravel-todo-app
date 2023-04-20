<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 font-nunito">
        @yield('content')
    </div>
</body>

</html>