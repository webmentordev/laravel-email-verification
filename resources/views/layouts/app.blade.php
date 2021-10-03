<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>{{ config('app.name') }}</title>
</head>
<body class="bg-gray-200">
    <div class="flex justify-center align-center">
        <div class="my-12 p-6 bg-white rounded-lg w-6/12">
            @yield('content')
        </div>
    </div>
</body>
</html>