<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
        <title>DevStagram - @yield('titulo')</title>
        {{-- <script src="{{ asset('js/app.js')}}"></script> --}}
         @vite('resources/css/app.css')

        
    </head>
    <body class=" bg-gray-100">
        <header class=" p-5 border-b bg-white shadow">
            <div class=" container mx-auto flex justify-between items-center">
                <h1 class=" text-3xl font-black">DevStagram</h1>
                
                @guest
                    <nav class=" flex gap-2 items-center">
                        <a href="{{route('login')}}" class=" font-bold uppercase text-gray-600 text-sm mr-4">Login</a>
                        <a href="{{ route('register') }}" class=" font-bold uppercase text-gray-600 text-sm">Crear Cuenta</a>
                    </nav>
                @endguest
                @auth
                    <nav class=" flex gap-2 items-center">
                        <a href="" class=" font-bold uppercase text-gray-600 text-sm mr-4">
                        Hola: 
                        <span class=" font-normal">
                        {{auth()->user()->username}}
                        </span></a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class=" font-bold uppercase text-gray-600 text-sm">Cerrar Sesion</button>
                        </form>
                    </nav>
                @endauth

            </div>
        </header>
        <main class=" container mx-auto mt-10">
            <h2 class=" font-black text-center text-3xl mb-10">@yield('titulo')</h2>
            @yield('contenido')
        </main>
        <footer class=" text-center p-5 text-gray-500 font-bold mt-10">
            DevStagram - Todos los derechos reservados {{now()->year}}
        </footer>
    </body>
</html>

