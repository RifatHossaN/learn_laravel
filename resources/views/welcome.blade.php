<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{env('APP_NAME')}} Welcome</title>
</head>
<body>
    <x-layout>
        welcome Page <br>
        @auth
            welcome user! you are logged in
        @endauth

        @guest
            welcome guest! you are not logged in
        @endguest
    </x-layout>
</body>
</html>