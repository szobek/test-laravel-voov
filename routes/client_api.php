<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::delete('/delete-client', [ClientController::class, 'remove'])->name('delete-client'); 