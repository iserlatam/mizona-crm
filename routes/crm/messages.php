<?php

use App\Livewire\App\MzApps\Index as MzAppIndex;
use Illuminate\Support\Facades\Route;

Route::get('/messages', MzAppIndex::class)
    ->middleware(['auth', 'verified'])
    ->name('apps');

Route::get('/messages/find/{id}', function($id) {
    return $id;
});
