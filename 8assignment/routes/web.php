<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::post('/authors', [AuthorController::class, 'store']);
Route::get('/authors', function () { return 'Authors List'; });