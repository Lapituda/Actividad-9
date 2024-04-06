<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Asegúrate de importar el controlador de Productos
use App\Http\Controllers\HomeController; // Asegúrate de importar el controlador Home

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard'); // Redirige a la ruta del panel de control si el usuario está autenticado
    } else {
        return view('landingpage'); // Muestra la vista de la página de inicio si el usuario no está autenticado
    }
});

Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth')->name('dashboard');
