<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home.index');
});

Route::get('/dashboard', function () {
    return view('frontend.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/auth/error',function(){
    return view('autherror');
})->name('auth.error');

Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');



require __DIR__.'/auth.php';
Route::group(['middleware'=>['auth','verified'],'prefix'=>'user','as'=>'user.'],function(){
    Route::get('updateprofile',[UserProfileController::class,'UpdateUserProfile'])->name('update');
    Route::get('dashboard',[UserProfileController::class,'displayDashboard'])->name('dashboard');
    Route::put('updateprofile',[UserProfileController::class,'UpdateProfile'])->name('profile.update');
});

