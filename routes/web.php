<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/stuff', [StuffController::class, 'index']);
Route::get('/stuff/{user}', [StuffController::class, 'create'])->name('stuff.create');
Route::post('/stuff/{user}', [StuffController::class, 'store'])->name('stuff.store');

Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/sign-in', [UserController::class, 'showSignInForm'])->name('sign-in.form');
Route::post('/sign-in', [UserController::class, 'signIn'])->name('sign-in');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/admin-stuff', [UserController::class, 'admin_stuff'])->name('admin');
Route::get('/admin/add-stuff', [UserController::class, 'addStuffForm'])->name('admin.add-stuff-form');
Route::post('/admin/add-stuff', [UserController::class, 'addStuff'])->name('admin.add-stuff');
Route::get('/admin/edit-stuff/{user}', [UserController::class, 'editStuffForm'])->name('admin.edit-stuff-form');
Route::put('/admin/edit-stuff/{user}', [UserController::class, 'editStuff'])->name('admin.edit-stuff');
Route::delete('/admin/delete-stuff/{user}', [UserController::class, 'deleteStuff'])->name('admin.delete-stuff');

Route::get('/create', function () {
    return view('createorder.menu');
});

Route::get('/createbyspecialist', [StuffController::class, "choosespecialist"]);
Route::get('/createbyspecialist/{service_id}', [StuffController::class, "choosespecialist"]);
Route::get('/createbyservice', [ServiceController::class, "createbyserviceNoparam"]);
Route::get('/createbyservice/{stuff_id}', [ServiceController::class, "createbyserviceWithparam"]);
Route::get('/createorder', [ServiceController::class, "createorder"]);
