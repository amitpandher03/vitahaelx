<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login/google', function () {
    return Socialite::driver('google')->redirect();
})->name('login.google');


Route::get('/register/google', function () {
    return Socialite::driver('google')->redirect();
})->name('register.google');
