<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::view('/admin', 'admin.index')->name('admin');
