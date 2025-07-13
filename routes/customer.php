
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/create-client', [CustomerController::class, 'create'])->name('create-clients-view');
Route::post('/create-client', [CustomerController::class, 'store'])->name('store-clients');
