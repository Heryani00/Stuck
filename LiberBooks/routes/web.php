<?php

use App\Models\Buku;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeleteAccountController;
use App\Http\Controllers\ChangePasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'buku' => Buku::paginate(3),
    ]);
});

Route::resource('/books', BukuController::class);


//modals

Route::get('/modal', function () {
    return view('component.modal');
});

Route::get('/categories', function () {
    return view('categories');
});



//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/redirect', [LoginController::class, 'redirect']);
Route::get('/callback', [LoginController::class, 'callback']);
Route::get('/fbRedirect', [LoginController::class, 'fbRedirect']);
Route::get('/fb/callback', [LoginController::class, 'fbCallback']);
Route::get('/privacy', function () {
    return view('privacy');
});




Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// favorite
Route::get('/favorite', function () {
    return view('dashboard.favorite');
});


//profile
Route::get('/dashboard/profile/getUser', [ProfileController::class, 'getUser']);
Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

//Setting


Route::get('/dashboard/setting/change-password', [ChangePasswordController::class, 'index']);
Route::post('/dashboard/setting/change-password', [ChangePasswordController::class, 'store'])->name('change.password');
Route::delete('/dashboard/setting/change-password/delete-account', [DeleteAccountController::class, 'destroy'])->name('delete-account');
