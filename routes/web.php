<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class,'index']);
});

Route::get('/', function () {
    return view('welcome');
    // return Auth::user()->name; // لمعرفة المستخدم اللي عامل تسجيل دخول
})->name('homePage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
