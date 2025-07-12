<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/list', [ClientController::class, 'list'])->name('list-clients');

