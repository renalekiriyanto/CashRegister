<?php

use App\Livewire\Kasir\Order;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/order', Order::class);