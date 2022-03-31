<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [ViewController::class , 'HomeRoute'])->name('index');
Route::get('/game' , [ViewController::class , 'GameRoute'])->name('game');
Route::get('/video' , [ViewController::class , 'VideoRoute'])->name('video');
Route::get('/contact' , [ViewController::class , 'ContactRoute'])->name('contact');
Route::get('/swapi' , [ViewController::class , 'swApiRoute'])->name('swapi');

