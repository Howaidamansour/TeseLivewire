<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ContactUs as CU;
use App\Http\Controllers\UserController;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('users')->group(function () {
    Route::get('', [UserController::class, 'index']);
});

Route::prefix('livewire')->group(function () {
    Route::get('contact-us', CU::class );
});





require __DIR__.'/auth.php';
