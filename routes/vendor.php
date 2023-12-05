<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('/vendor/dashboard',[VendorController::class,'getdashboard'])->middleware(['auth','role:vendor'])->name('vendor.dashbaord');
