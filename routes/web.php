<?php

use App\Livewire\Kasir\Order;
use App\Livewire\Product\Index;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => 'kasir', 'as' => 'kasir.'], function () {
    Route::get('/', Order::class)->name('order');
});
Route::group(['prefix' => 'produk', 'as' => 'produk.'], function(){
    Route::get('/', Index::class) ->name('list');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});