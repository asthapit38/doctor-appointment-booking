<?php

use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Admin/Dashboard');
    });
    Route::resource('medicines', MedicineController::class);
});
