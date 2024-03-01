<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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


Route::post('/users', [UsersController::class, 'postUser'])->name('users.post');

Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact support@nbms.com'
    ], 404);
});