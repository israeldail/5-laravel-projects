<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- vite server to target appropriate css and js files --}}
       @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- include livewire styles --}}
        @livewireStyles
      
    </head>
    <body class="antialiased">
        {{ $slot }}

        {{-- Livewire scripts --}}
        @livewireScripts
    </body>
</html>
