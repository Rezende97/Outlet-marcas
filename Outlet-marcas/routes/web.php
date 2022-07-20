<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nike;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/nike', [nike::class, 'sobre']);