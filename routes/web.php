<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonebookController;

Route::resource('phonebook', PhonebookController::class);


// Route::get('/', function () {
//     return view('welcome');
// });