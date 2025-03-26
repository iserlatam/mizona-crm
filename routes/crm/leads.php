<?php

use App\Livewire\App\MzApps\Index as MzAppIndex;
use Illuminate\Support\Facades\Route;

Route::get('/leads', MzAppIndex::class)
    ->middleware(['auth', 'verified'])
    ->name('apps');

Route::get('/leads/find/{id}', function($id) {
    return $id;
});
