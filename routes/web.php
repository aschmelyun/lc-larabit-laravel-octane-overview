<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-hash', function () {
    return [
        Hash::make(Str::random(16)),
        Hash::make(Str::random(16)),
        Hash::make(Str::random(16))
    ];
});

Route::get('/test-query', function () {
    return [
        User::find(1),
        User::find(2),
        User::find(3)
    ];
});