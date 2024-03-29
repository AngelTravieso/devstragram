@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection


@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            {{-- asset() muestra los recursos estáticos de la carpeta 'public' --}}
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imágen registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow">
            {{-- /register --}}
            <form action="{{ route('register') }}" method="POST" novalidate>
                {{-- protección csrf --}}
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu Nombre"
                        {{--
                            Colocar clases si hay algún error en el campo, agregar clase condicionalmente
                            @error('name_input') @enderror
                            @error('name') @enderror
                        --}}
                        class="border p-3 w-full rounded @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}"
                        {{-- Para imprimir el valor del input cuando se haga submit
                            value="{{ old('name_input')}}"
                            value="{{ old('name')}}"
                        --}}
                    />

                    @error('name')
                        <p class="text-white bg-red-500 rounded-lg text-sm my-2 p-2 text-center">
                            {{-- Mensaje de error --}}
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu Nombre de Usuario"
                        class="border p-3 w-full rounded @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}"
                    />

                    @error('username')
                        <p class="text-white bg-red-500 rounded-lg text-sm my-2 p-2 text-center">
                            {{-- Mensaje de error --}}
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu Email de Reg"
                        class="border p-3 w-full rounded @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}"
                    />

                    @error('email')
                        <p class="text-white bg-red-500 rounded-lg text-sm my-2 p-2 text-center">
                            {{-- Mensaje de error --}}
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password de Registro"
                        class="border p-3 w-full rounded @error('password') border-red-500 @enderror"
                    />

                    @error('password')
                        <p class="text-white bg-red-500 rounded-lg text-sm my-2 p-2 text-center">
                            {{-- Mensaje de error --}}
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input
                        id="password_confirmation"
                        {{-- Debe ser ajuro password_confirmation (para automatizar esa validación) --}}
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu Password"
                        class="border p-3 w-full rounded @error('password_confirmation') @enderror"
                        value="{{ old('password_confirmation') }}"
                    />
                </div>

                <input type="submit" value="Crear Cuenta"
                class="bg-sky-600 hover:bg-sky-700 uppercase text-white transition-colors cursor-pointer font-bold w-full p-3 rounded-lg">
            </form>
        </div>

    </div>
@endsection
