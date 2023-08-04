<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
	Route::get('news/create', 'add')->name('news.add');
	Route::post('news/create', 'create')->name('news.create');
});

use App\Http\Controllers\Admin\ProfileController;
Route::controller(ProfileController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
	Route::get('profile/create', 'add')->name('profile.add');
	Route::get('profile/edit', 'edit')->name('profile.edit'); 
	Route::post('profile/create', 'create')->name('profile.create');
	Route::post('profile/edit', 'update')->name('profile.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
