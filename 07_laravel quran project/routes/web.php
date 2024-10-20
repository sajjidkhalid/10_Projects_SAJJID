<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quran;

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/', [quran::class , "getcontents"]);
Route::get('/read/{snum}', [quran::class , "getcontentsDetails"]);
