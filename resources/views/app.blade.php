<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        <title>Laravel</title>
    </head>
    <body class="bg-gray-200 sans text-smooth">
        <div id="app">
            <app></app>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
