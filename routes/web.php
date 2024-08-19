<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});


Route::get('/', function () {
    return"<h1>Hello world</h1>";
});

Route::get("/feed", function () {
    return view("feed");
});


Route::get("/profile", function () {
    return view("users.profile");
});
