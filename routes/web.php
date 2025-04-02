<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');


Route::get('/Dress', function () {
    return view('frontend.Dresses');
})->name('dress');

Route::get('/accessory', function () {
    return view('frontend.accessories');
})->name('accessory');

Route::get('/handbag', function () {
    return view('frontend.handbags');
})->name('handbag');

Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('checkout');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
