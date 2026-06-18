<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bio', function () {
    return view('bio');
});

Route::get('ebd', function () {
    return view('ebd');
});

Route::get('assignment', function () {
    return view('assignment');
});

