<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');


//genera las 7 rutas para crud 

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only(['index','edit','update'])->names('users');

Route::get('course',[CourseController::class, 'index'])->name('courses.index');
