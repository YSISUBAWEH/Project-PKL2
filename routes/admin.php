<?php

use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\admin\LoginController;
	use App\Http\Controllers\admin\RegisterController;
	use App\Http\Controllers\admin\AdminController;


	Route::get('/admin',[LoginController::class,'showAdminLogin'])->name('admin.login-view');
	Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.Login');

	Route::get('/admin/register',[RegisterController::class,'showAdminRegister'])->name('admin.register-view');
	Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

	Route::get('/admin/dashboard',[AdminController::class,'index'])->middleware('auth:admin');
	Route::get('/admin/logout',[AdminController::class,'logout']);
