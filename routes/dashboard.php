<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\SpendsController;
use App\Http\Controllers\Dashboard\IncomeController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('', function () {
    return view('layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('change-lang/{lang}', [HomeController::class, 'localization'])->name('change.lang');

// Route::prefix('spendsIncome')->as('spendsIncome.')->group(function () {
//     Route::get('spends/{type}', [SpendsController::class, 'index'])->name('spends.index');
//     Route::get('income/{type}', [IncomeController::class, 'index'])->name('income.index');
//     Route::post('income/store', [IncomeController::class, 'store'])->name('income.store');
//     Route::get('income/edit/{id}', [IncomeController::class, 'edit'])->name('income.edit');
//     Route::post('income/{id}/update', [IncomeController::class, 'update'])->name('income.update');
//     Route::delete('income/delete/{id}', [IncomeController::class, 'destroy'])->name('income.destroy');

//     Route::resource('spends', SpendsController::class,  ['except' => 'index']);
//     // Route::resource('income', IncomeController::class, ['except' => 'index'])->parameters(['edit' => 'id']);
// }) ;

// Route::resource('category', CategoryController::class);



// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });