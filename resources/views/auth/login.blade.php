@extends('layouts.app')

@section('titulo')
    Inicia secion en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="w-3/6 p-3">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen Login Usuarios">
        </div>
        <div class="w-2/6 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('login')}}" method="POST" novalidate>
                @csrf
                
                @if (session('mensaje'))
                <p class=" bg-red-500 text-white text-center text-sm my-2 rounded-lg p-1">{{ session('mensaje') }} </p>
                @endif
                <div class=" mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold ml-3">
                        Email
                    </label>
                    <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Ingresa tu Email" 
                    class="border p-3 w-full rounded-lg @error('email') shadow-md shadow-red-500 @enderror"
                    value="{{old('email')}}"
                    />
                    @error('email')
                        <p class=" bg-red-500 text-white text-center text-sm my-2 rounded-lg p-1">{{ $message }} </p>
                    @enderror
                </div>
                <div class=" mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold ml-3">
                        Password
                    </label>
                    <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Ingresa tu Paswword" 
                    class="border p-3 w-full rounded-lg @error('password') shadow-md shadow-red-500 @enderror"
                    />
                    @error('password')
                        <p class=" bg-red-500 text-white text-center text-sm my-2 rounded-lg p-1">{{ $message }} </p>
                    @enderror
                </div>
                <div class=" mb-5">
                    <input type="checkbox" name="remember" id=""> 
                    <label for="" class=" uppercase text-gray-500 font-bold ml-3">
                        Mantener mi Sesion abierta
                    </label>
                </div>
                <input 
                type="submit" 
                value="Crear Cuenta"
                class=" bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection