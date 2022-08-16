<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Ruta por defecto, simplemente regresa la vista welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

/* Creamos una ruta get con la url /users que utilizara el UserController función index y le ponemos el nombre users.index */
Route::get('users', [UserController::class, 'index'])->name('users.index');
