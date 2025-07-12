
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/create-client', [ClientController::class, 'create'])->name('create-clients-view');
Route::post('/create-client', [ClientController::class, 'store'])->name('store-clients');
