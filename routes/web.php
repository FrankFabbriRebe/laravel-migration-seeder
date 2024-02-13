<?php

use Illuminate\Support\Facades\Route;

// include MainController
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
