<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/product-inventory', function () {
    return view('pages.productInventory');
})->name('productInventory');

Route::get('/pos-terminal', function () {
    return view('pages.posTerminal');
})->name('posTerminal');