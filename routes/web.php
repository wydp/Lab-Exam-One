<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

// Redirect homepage to characters list
Route::get('/', function () {
    return redirect()->route('characters.index');
});

// All CRUD routes for characters
Route::resource('characters', CharacterController::class);