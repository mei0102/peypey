<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/charge', function () {
    return view('charge');
})->middleware(['auth', 'verified'])->name('charge');

Route::get('/history', function () {
    return view('history');
})->middleware(['auth', 'verified'])->name('history');

Route::middleware('auth')->group(function () {
    //プロフィール編集
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //homeページを表示
    Route::get('/home', [HomeController::class, 'get_current_amount'])->name('home');
    
    //purchaseページを表示
    Route::get('/purchase', [PurchaseController::class, 'get_purchase'])->name('purchase');
    Route::get('/complate_purchase', [PurchaseController::class, 'p_redirect'])->name('purchase');
    Route::post('/complate_purchase', [PurchaseController::class, 'post_purchase'])->name('complate_purchase');

    //historyページを表示
    Route::get('/history', [HistoryController::class, 'get_history'])->name('history');
});

require __DIR__.'/auth.php';
