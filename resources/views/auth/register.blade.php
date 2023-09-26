@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="w-3/6 p-3">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen Registro">
        </div>
        <div class="w-2/6 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class=" mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold ml-3">
                        Nombre
                    </label>
                    <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Tu Nombre" 
                    class="border p-3 w-full rounded-lg @error('name') shadow-md shadow-red-500 @enderror"
                    value="{{old('name')}}"
                    />
                    @error('name')
                        <p class=" bg-red-500 text-white text-center text-sm my-2 rounded-lg p-1">{{ $message }} </p>
                    @enderror
                </div>
                <div class=" mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold ml-3">
                        Username
                    </label>
                    <input 
                    type="text" 
                    id="username" 
                    name="username"
                    placeholder="Ingresa un Nombre de Usuario"
                    class="border p-3 w-full rounded-lg @error('username') shadow-md shadow-red-500 @enderror"
                    value="{{old('username')}}"
                    />
                    @error('username')
                        <p class=" bg-red-500 text-white text-center text-sm my-2 rounded-lg p-1">{{ $message }} </p>
                    @enderror
                </div>
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
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold ml-3">
                        Password
                    </label>
                    <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    placeholder="Repite tu Paswword" 
                    class="border p-3 w-full rounded-lg @error('name') shadow-md shadow-red-500 @enderror"
                    />
                    @error('password_confirmation')
                        <p class=" bg-red-500 text-white text-center text-sm my-2 rounded-lg p-1">{{ $message }} </p>
                    @enderror
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