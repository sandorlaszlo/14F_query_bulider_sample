<?php

use App\Http\Controllers\QueryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/actors', [QueryController::class, 'actors']);
Route::get('/actors/name/{lastname}', [QueryController::class, 'actorsByLastname']);
Route::get('/actors/name/{lastname}/{firstname}', [QueryController::class, 'actorsByName']);

Route::get('/actors/count', [QueryController::class, 'countActors']);
