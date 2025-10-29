<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-loan-application', [App\Http\Controllers\ContactController::class, 'submitLoanApplication'])->name('submitLoanApplication');
