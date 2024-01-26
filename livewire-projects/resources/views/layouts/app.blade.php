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
        <nav class="flex bg-slate-700 text-white">
            <a href="/" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('welcome')) ? 'bg-slate-800' : '' }}">Counter</a>
            <a href="/calculator" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('calculator')) ? 'bg-slate-800' : '' }}">Calculator</a>
            <a href="/todo-list" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('todo-list')) ? 'bg-slate-800' : '' }}">Todo List</a>
            <a href="/cascading-dropdown" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('cascading-dropdown')) ? 'bg-slate-800' : '' }}">Cascading Dropdown</a>
            <a href="/products" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('products')) ? 'bg-slate-800' : '' }}">Products</a>
            <a href="/image-upload" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('image-upload')) ? 'bg-slate-800' : '' }}">Image Upload</a>
            <a href="/register" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('register')) ? 'bg-slate-800' : '' }}">Register</a>
        </nav>
        {{ $slot }}
        {{-- Livewire scripts --}}
        @livewireScripts
    </body>
</html>
