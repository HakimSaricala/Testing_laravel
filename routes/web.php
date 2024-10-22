<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'overview'])->name('overview');
Route::get('/philosophy', [PageController::class, 'philosophy'])->name('philosophy');
Route::get('/vision', [PageController::class, 'vision'])->name('vision');


