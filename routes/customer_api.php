<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::delete('/delete-client', [CustomerController::class, 'remove'])->name('delete-client'); 