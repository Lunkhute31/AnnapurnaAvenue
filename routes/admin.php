<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard',[AdminController::class,'getdashboard'])->middleware(['auth','role:admin'])->name('admin.dashboard');

//Profile Routes//
Route::get('/admin/profile',[ProfileController::class,'index'])->name('admin.profile');
Route::post('/admin/profile/update',[ProfileController::class,'updateprofile'])->name('admin.profile.update');
Route::post('/admin/profile/update/password',[ProfileController::class,'updatepassword'])->name('admin.profile.update.password');
