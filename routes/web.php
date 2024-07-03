<?php

use Illuminate\Support\Facades\Route;

//route view
Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    echo "Halo!";
});
// //route basic
// Route::get('/about', function () {
//     return 'nonop belajar laravel';
// });
