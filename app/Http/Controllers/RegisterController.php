<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    /**
     * Los nombres de los métodos son recomendados según los resource controllers
     * HTTP - MÉTODO - RUTA
     * GET => index => clientes.index
     * POST => store => clientes.store
     * DELETE => destroy => clientes.destroy
     */

    public function index()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        // dd() => die and dump
        // dd($request);

        // Para acceder directamente a un valor
        // dd($request->get('username'));

        // Modificar el Request (hacerlo lo menos posible, solo si es la última opción)
        $request->request->add(['username' => Str::slug($request->username)]);

        // Reglas de validación
        $this->validate($request, [
            // key => reglas
            // 'name' => 'required|min:5',
            'name' => ['required', 'max:30'],
            // 'unique: tabla' => verificar que el valor sea unico contra la tabla indicada
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'unique:users','email', 'max:60' ],
            'password' => ['required', 'confirmed', 'min:6']
        ]);


        // dd('Creando Usuario');

        // Equivalenete a INSERT INTO usuarios
        User::create([
            'name' => $request->name,
            // 'username' => Str::lower($request->username), // => Str::lower lo transforma a minuscula
            // 'username' => Str::slug($request->username), // => Str::slug lo convierte a una URL util, el unique del campo solo funciona con Str::lower
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // => Hash para hashear contraseña
        ]);



    }


}
