<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DemoController;


    Route::get('/',[HomeController::class, 'index'])->name('home');
    Route::get('/event',[EventController::class, 'index'])->name('event.index');
    Route::post('/events/store',[EventController::class, 'store'])->name('events.store');
    Route::get('/demo',[DemoController::class, 'index'])->name('demo.index');

