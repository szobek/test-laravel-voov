<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/list', [CustomerController::class, 'list'])->name('list-clients');

