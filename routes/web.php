<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);


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

// hanya admin yang bisa akses dashboard admin
Route::get('/admin/dashboard', function () {
    return "Ini halaman Admin";
})->middleware(['auth', 'role:admin']);

// hanya user biasa yang bisa akses dashboard user
Route::get('/user/dashboard', function () {
    return "Ini halaman User";
})->middleware(['auth', 'role:users']);

Route::get('/', function () {
    return view('login');
});

use Illuminate\Support\Facades\Auth;

Route::get('/dashboard', function () {
    $user = Auth::user(); // ambil user yang sedang login
    return view('dashboard', compact('user'));
})->middleware('auth');


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\UtsController;

Route::get('/uts', [UtsController::class, 'index'])->name('uts.index');
Route::get('/uts/web', [UtsController::class, 'utsWeb'])->name('uts.web');
Route::get('/uts/database', [UtsController::class, 'utsDatabase'])->name('uts.database');


require __DIR__.'/auth.php';
