<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/empleados', function () {
    return view('empleados.index');
});

Route::get('/empleados/create', [EmpleadoController::class,'create']);
*/

Route::resource('empleados', EmpleadoController::class);