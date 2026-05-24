<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimationController;

// READ
Route::get('/',                [AnimationController::class, 'index'])->name('animations.index');
Route::get('/country/{id}',    [AnimationController::class, 'byCountry'])->name('animations.byCountry');
Route::get('/boxoffice',       [AnimationController::class, 'boxOffice'])->name('animations.boxoffice');
Route::get('/recommended',     [AnimationController::class, 'recommended'])->name('animations.recommended');

// CREATE — harus SEBELUM /animation/{id}
Route::get('/animation/create',  [AnimationController::class, 'create'])->name('animations.create');
Route::post('/animation',        [AnimationController::class, 'store'])->name('animations.store');

// READ detail
Route::get('/animation/{id}',    [AnimationController::class, 'show'])->name('animations.show');

// UPDATE
Route::get('/animation/{id}/edit', [AnimationController::class, 'edit'])->name('animations.edit');
Route::put('/animation/{id}',      [AnimationController::class, 'update'])->name('animations.update');

// DELETE
Route::delete('/animation/{id}',   [AnimationController::class, 'destroy'])->name('animations.destroy');

// COUNTRIES
Route::get('/countries',           [AnimationController::class, 'countries'])->name('countries.index');
Route::post('/countries',          [AnimationController::class, 'storeCountry'])->name('countries.store');
Route::delete('/countries/{id}',   [AnimationController::class, 'destroyCountry'])->name('countries.destroy');