<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\TaskController;

    /*
    Route::get('/', function () {
        return view('/login');
    });

    Route::get('task', function() {
        return view('/task');
    })->name('task');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/panel', [LoginController::class, 'index'])->name('panel');
    */







    Route::get('/', [LoginController::class, 'showlogin'])->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/panel', [LoginController::class, 'index'])->name('panel');

    Route::get('/login', [LoginController::class, 'showlogin']);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/task', [TaskController::class, 'index'])
        ->name('task');

    Route::post('/task', [TaskController::class, 'store'])
        ->name('task.store');

    Route::post('/users', [UserController::class, 'store'])
        ->name('users.store');