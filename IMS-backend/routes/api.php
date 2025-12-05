<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get(
    '/test',
    fn() =>
    response()->json([
        'status' => true,
        "message" => 'API connected successfully!'
    ])
);


//login route
Route::post('/login', [UserController::class, 'login']);
