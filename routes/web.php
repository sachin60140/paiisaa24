<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-loan-application', [App\Http\Controllers\ContactController::class, 'submitLoanApplication'])->name('submitLoanApplication');


Route::get('/compress-pdf', [PdfController::class, 'index'])->name('pdf.index');
