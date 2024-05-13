<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'render']);

Route::get('/authorship/{id}', [HomeController::class, 'renderLeadership']);

Route::get('/media', [HomeController::class, 'renderMedia']);

Route::get('/books', [HomeController::class, 'renderbooks']);

Route::get('/info/{id}', [HomeController::class, 'renderbook']);

Route::get('/charles', [HomeController::class, 'rendercharles']);

Route::get('/contact-us', [HomeController::class, 'contact']);

Route::post('/contact-us', [HomeController::class, 'PostContact'])->name('contact.submit');



