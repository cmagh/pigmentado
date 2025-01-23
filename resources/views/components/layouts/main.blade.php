@php
    setlocale(LC_TIME, 'es_ES.UTF-8')
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        
        @vite(['resources/css/styles.css', 'resources/js/web/app.js'])
        
    </head>
    <body>        
        {{ $slot }}
    </body>
</html>