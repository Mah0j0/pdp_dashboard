<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('index');
});
// DASHBOARD
Route::get('/dashboard/{role_id}/{user_name}/{user_email}', function ($role_id, $user_name, $user_email) {
    return view('dashboard', ['role_id' => $role_id, 'user_name' => $user_name, 'user_email' => $user_email]);	
})->middleware(['auth', 'verified'])->name('dashboard');

//AUTENTICACIÓN
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//CLIENTES
//clien resource index

Route::resource('clients', ClientController::class);
