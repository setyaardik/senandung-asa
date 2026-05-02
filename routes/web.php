<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuntingController;
use App\Http\Controllers\YouthParticipationController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ruang-program', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/ruang-cegah-stunting', [StuntingController::class, 'index'])
    ->name('stunting.index');
Route::get('/ruang-meaningful-youth-participation', [YouthParticipationController::class, 'index'])
    ->name('youth.index');
