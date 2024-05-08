<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'render']);

Route::get('/leadership', [HomeController::class , 'renderLeadership']);



// Route::get('/', [HomeController::class , 'render']);

// Route::get('/services/{id}' ,[HomeController::class , 'renderServices'] );

// Route::get('/expertise/{id}' ,[HomeController::class , 'renderExpertise'] );

// Route::get('/test' , [Testing::class  ,"test"]);