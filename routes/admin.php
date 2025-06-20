<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hola desde la ruta de administración';
})->name('home');
