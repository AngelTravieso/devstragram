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
            <form action="/crear-cuenta" method="POST">
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
                        class="border p-3 w-full rounded"
                    />
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
                        class="border p-3 w-full rounded"
                    />
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
                        class="border p-3 w-full rounded"
                    />
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
                        class="border p-3 w-full rounded"
                    />
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu Password"
                        class="border p-3 w-full rounded"
                    />
                </div>

                <input type="submit" value="Crear Cuenta"
                class="bg-sky-600 hover:bg-sky-700 uppercase text-white transition-colors cursor-pointer font-bold w-full p-3 rounded-lg">
            </form>
        </div>

    </div>
@endsection
