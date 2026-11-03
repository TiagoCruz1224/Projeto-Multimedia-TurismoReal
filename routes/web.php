<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BilheteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoteiroController;
use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
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
Route::get('/change-language/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
})->name('change.language');

Route::get('/', [HomeController::class, 'index'])->name('main');
Route::get('/roteiro', [RoteiroController::class, 'inde'])->name('main');

Route::get('/dashboard', function (Request $request) {
    // Only admins and mods see the user list, and only the names it shows
    $userNames = $request->user()->hasRole(['admin', 'mod']) ? User::pluck('name') : collect();

    return view('dashboard', ['userNames' => $userNames]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/merch', function () {
    return view('merch');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/termos', function () {
    return view('termos');
});

Route::get('/privacidade', function () {
    return view('privacidade');
});

Route::get('/bilhetes', [BilheteController::class, 'showBilhetes']);

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
});
Route::middleware(['auth'])->group(function () {
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('articles/create', [ArticleController::class, 'store'])->name('articles.store');
    Route::delete('articles/{article}', [ArticleController::class, 'destroy'])
        ->name('articles.destroy')
        ->middleware('can:delete-article,article');
});
Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

// Checkout is not implemented: the old /payment/{product}/{price} route took the amount to charge from the URL
require __DIR__.'/auth.php';
