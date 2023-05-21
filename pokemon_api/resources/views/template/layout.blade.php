<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokemon Api</title>
        @vite(['pokemon_api\resources\css\app.css', 'pokemon_api\resources\js\app.js']);
    </head>
    <body>
       {{$slot}} 
    </body>
</html>
