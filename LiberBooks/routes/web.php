<?php

use App\Models\Buku;
use App\Models\Favorite;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BukuUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DeleteAccountController;
use App\Http\Controllers\ChangePasswordController;
use Illuminate\Support\Facades\DB;


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
Route::get('/allbooks', function () {
    $userId = auth()->id();
    $ids = DB::table('favorites')->where('user_id', $userId)->select('buku_id')->pluck('buku_id')->toArray();
    $array = implode(',', $ids);
    $selected = explode(',', $array);
    $collect = collect($selected);

    $b = [];
    $bu = Buku::all();
    foreach ($bu as $bi) {
        $b[] = $collect->contains($bi->id);
        // dd($b);
    }

    // dd($b);
    return view('books', [
        'buku' => Buku::latest()->Filter(request('category'))->paginate(8)->withQueryString(),
        'ids' => $collect,
        'bb' => $b,
    ]);
});

Route::get('categories/{category:name}', function (Category $category) {
    return view('books', [
        'buku' => $category->buku->load('category'),

    ]);
});

Route::post('/favorites', [FavoriteController::class, 'store']);
Route::delete('/favorites', [FavoriteController::class, 'destroy']);

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all(),
    ]);
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/books/getBuku', [BukuController::class, 'getBuku']);
Route::resource('admin/books', BukuController::class);

Route::get('/admin/category/getCategory', [AdminCategoryController::class, 'getCategory']);
Route::resource('admin/category', AdminCategoryController::class);


Route::get('allbooks/user/books/{id}', [BukuUserController::class, 'show']);
Route::get('allbooks/user/books/download/{id}', [BukuUserController::class, 'download']);




//modals

Route::get('/modal', function () {
    return view('component.modal');
});



Route::get('/about', function () {
    return view('about');
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
Route::get('/dashboard', [UserController::class, 'index']);

// favorite
Route::get('/favorite', function () {
    return view('dashboard.favorite', [
        'favorite' => Favorite::all()
    ]);
});


//profile
Route::get('/dashboard/profile/getUser', [ProfileController::class, 'getUser']);
Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

//Setting


Route::get('/dashboard/setting/change-password', [ChangePasswordController::class, 'index']);
Route::post('/dashboard/setting/change-password', [ChangePasswordController::class, 'store'])->name('change.password');
Route::delete('/dashboard/setting/change-password/delete-account', [DeleteAccountController::class, 'destroy'])->name('delete-account');
