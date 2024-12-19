<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('timezone', function () {
    return view('timezone');
});

Route::get('/environment', function(){
    return view('environment');
});

Route::get('/config-value', function(){
    return view('config-value');
});

Route::resource('/users', UserController::class, [
    'index'
]);
