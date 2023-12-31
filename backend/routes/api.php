<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Project\TaskController;

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
Route::group(['middleware' => 'guest'], function () {
    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('/login', [LoginController::class, 'login']);
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::prefix('projects')->group(function () {
        Route::resource('/', ProjectController::class)
            ->parameter('', 'project')
            ->except('show');

        Route::prefix('{project}')->group(function () {
            Route::resource('tasks', TaskController::class)
                ->shallow()
                ->except('show');
        });
    });
});
