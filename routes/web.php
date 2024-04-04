<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ToiletController as AdminToiletController;
use App\Http\Controllers\User\ToiletController as UserToiletController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', 
[DashboardController::class, 'index'])
->middleware(['auth', 'verified'])
->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::resource('/toilets', UserToiletController::class)
->middleware(['auth', 'role:user,admin'])
->names('user.toilets')
->only(['index', 'show','create','store','edit','update']);
Route::resource('/admin/toilets', AdminToiletController::class)->middleware(['auth', 'role:admin'])->names('admin.toilets');

// php artisan route:list
require __DIR__.'/auth.php';
