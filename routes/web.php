<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminUserController; 
use App\Http\Controllers\Admin\ToiletController as AdminToiletController;
use App\Http\Controllers\User\ToiletController as UserToiletController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\User\ReviewController as UserReviewController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', 
[DashboardController::class, 'index'])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{user}', [AdminUserController::class, 'show'])->name('admin.users.show');
    Route::get('/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
});


Route::resource('/toilets', UserToiletController::class)
->middleware(['auth', 'role:user,admin'])
->names('user.toilets')
->only(['index', 'show','create','store','edit','update']);
Route::resource('/admin/toilets', AdminToiletController::class)->middleware(['auth', 'role:admin'])->names('admin.toilets');

Route::resource('/reviews', UserReviewController::class)
    ->middleware(['auth', 'role:user,admin'])
    ->names('user.reviews')
    ->only(['index', 'show','create','store','edit','update','delete']);

    Route::resource('/admin/reviews', AdminReviewController::class)->middleware(['auth', 'role:admin'])->names('admin.reviews');

    // Route::get('/toilets/{toilet}/reviews/create', [UserReviewController::class, 'create'])
    // ->middleware(['auth', 'role:user,admin'])
    // ->name('user.reviews.create');

    // Route::get('/toilets/{toilet}/reviews/create', [AdminReviewController::class, 'create'])
    // ->middleware(['auth', 'role:user,admin'])
    // ->name('admin.reviews.create');






// php artisan route:list
require __DIR__.'/auth.php';
