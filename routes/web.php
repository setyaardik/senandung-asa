<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InclusionController;
use App\Http\Controllers\InclusionArticleController;
use App\Http\Controllers\StuntingController;
use App\Http\Controllers\YouthParticipationController;


Route::get('/ruang-cegah-stunting', [StuntingController::class, 'index'])
    ->name('stunting.index');
Route::get('/ruang-meaningful-youth-participation', [YouthParticipationController::class, 'index'])
    ->name('youth.index');
Route::get('/ruang-inklusi/artikel/{slug}', [InclusionArticleController::class, 'show'])
    ->name('inclusion.article.show');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ruang-program', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/ruang-inklusi', [InclusionController::class, 'index'])
    ->name('inclusion.index');