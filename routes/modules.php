<?php

use App\Livewire\App\MzApps\Index as MzAppIndex;
use Illuminate\Support\Facades\Route;

Route::get('/apps', MzAppIndex::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
