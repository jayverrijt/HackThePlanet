<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaunchController;


#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', [LaunchController::class, 'index'])->name('launch.index');
