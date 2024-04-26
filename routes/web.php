<?php

use Illuminate\Support\Facades\Route;

Route::name('site.')->group(function () {
    Route::get('/', \App\Livewire\Web\Home::class)->name('index');
    Route::get('/home', \App\Livewire\Web\Home::class)->name('home');
});
