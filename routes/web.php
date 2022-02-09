<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('posts', function () {

});

Route::controller(Controllers::class)->group(function () {
  //  Route::get('/posts', 'show');
    //Route::post('/orders', 'store');
});
Route::get('/posts', App\Http\Livewire\Post\Index::class);
