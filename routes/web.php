<?php

use Illuminate\Support\Facades\Route;

Route::get('/flags', function () {
    return view('flags');
});
