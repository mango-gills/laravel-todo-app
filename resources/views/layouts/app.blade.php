<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- @vite('resources/css/app.css') -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap");

        body {
            font-family: "Nunito", sans-serif;
        }
    </style>
</head>

<body class="text-white bg-gray-900">
    <div class="container px-4 mx-auto font-nunito">
        @yield('content')
    </div>
</body>

</html>