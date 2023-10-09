<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


//Llama a una vista llamada profile.
Route::view('profile', 'profile')->name('profile');

//Guardamos la imagen.
Route::post('profile',[ProfileController::class, 'upload']);

