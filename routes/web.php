<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\PostCrud;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', PostCrud::Class);


