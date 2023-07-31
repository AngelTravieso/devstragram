<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // => closure
    return view('principal');
});

// ruta, [clase, metodo]
Route::get('/register', [RegisterController::class, 'index'])->name('register'); // esto hace que los cambios se propagan
Route::post('/register', [RegisterController::class, 'store']); // si no especifico el name toma el anterior (esto aplica si es la misma url que la anterior)
