<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/", function (Request $request) {

    return response()->json([
        'application' => env("APP_NAME"),
        'environment' => env('APP_ENV'),
        'php_version' => phpversion(),
        'laravel_version' => app()->version(),
        'app_version' => config('app.version'),
        'url' => config('app.url'),
    ]);
});
