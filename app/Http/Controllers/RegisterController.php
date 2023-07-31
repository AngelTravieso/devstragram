<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function store()
    {
        dd('POST...');
    }


}
