<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware'=>['auth','admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::view('/form','backend.admin.form.form')->name('form');
    Route::post('/form-submit',[DashboardController::class,'formSubmit'])->name('form-submit');
});

