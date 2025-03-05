<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', [HaloController::class,'coba']);

Route::get('/todo', [TodoContoller::class, 'index'])->name('todo');
Route::post('/todo', [TodoContoller::class, 'store'])->name('todo.post');

// Route::get('/todo', function (){
//     return view('todo.app');
// });

