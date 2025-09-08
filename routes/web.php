<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaunchController;


#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', [LaunchController::class, 'index'])->name('launch.index');
Route::get('/start', [LaunchController::class, 'prompt'])->name('launch.prompt');
Route::post('/launch/control', [LaunchController::class, 'start'])->name('launch.post');
Route::post('/launch/ai', [LaunchController::class, 'answer'])->name('launch.ai');
Route::get('/winner', [LaunchController::class, 'winner'])->name('launch.winner');
