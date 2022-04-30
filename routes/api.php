<?php

use App\Http\Controllers\Covid19Controller;
use Illuminate\Support\Facades\Route;

Route::post('create', [Covid19Controller::class, 'create'])->name('covid.create');
