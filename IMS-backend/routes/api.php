<?php

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
