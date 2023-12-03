<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;





Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
    Route::get('/create-table','create')->name('create-table');
    Route::post('/table_insert','store')->name('table_insert');
    Route::get('/edit-table/{id}','edit')->name('edit-table');
    Route::PUT('/update-table/{id}','update')->name('update_table');
    Route::get('/delete-table/{id}','destroy')->name('delete-table');
    Route::get('/delete_all-table','delete_all')->name('delete_all_table');
});












Route::get('courses', function () {
    return view('courses');
})->name('courses');

Route::get('files', function () {
    return view('files');
})->name('files');

Route::get('friends', function () {
    return view('friends');
})->name('friends');

Route::get('plan', function () {
    return view('plan');
})->name('plan');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('projects', function () {
    return view('projects');
})->name('projects');

Route::get('settings', function () {
    return view('settings');
})->name('settings');

