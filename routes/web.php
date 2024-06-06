<?php

use App\Livewire\Apropos;
use App\Livewire\HomePage;
use App\Livewire\Procedure;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/apropos', Apropos::class);
Route::get('/procedure', Procedure::class);
