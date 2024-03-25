<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DriverController as AdminDriverController;
use App\Http\Controllers\User\DriverController as UserDriverController;
use App\Http\Controllers\Admin\CarController as AdminCarController;
use App\Http\Controllers\User\CarController as UserCarController;
use App\Http\Controllers\Admin\RaceController as AdminRaceController;
use App\Http\Controllers\User\RaceController as UserRaceController;
use App\Http\Controllers\Admin\RecordsController as AdminRecordsController;
use App\Http\Controllers\User\RecordsController as UserRecordsController;





Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix' => 'cars'], function () {
//     Route::get('/', [CarController::class, 'index'])->name('cars.index');
//     Route::post('/', [CarController::class, 'store'])->name('cars.store');
//     Route::get('/create', [CarController::class, 'create'])->name('cars.create');
//     Route::get('/{car}', [CarController::class, 'show'])->name('cars.show');
//     Route::get('/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
//     Route::put('/{car}', [CarController::class, 'update'])->name('cars.update');
//     Route::delete('/{car}', [CarController::class, 'destroy'])->name('cars.destroy');
// });

// Route::group(['prefix' => 'drivers'], function () {
//     Route::get('/', [DriverController::class, 'index'])->name('drivers.index');
//     Route::post('/', [DriverController::class, 'store'])->name('drivers.store');
//     Route::get('/create', [DriverController::class, 'create'])->name('drivers.create');
//     Route::get('/{driver}', [DriverController::class, 'show'])->name('drivers.show');
//     Route::get('/{driver}/edit', [DriverController::class, 'edit'])->name('drivers.edit');
//     Route::put('/{driver}', [DriverController::class, 'update'])->name('drivers.update');
//     Route::delete('/{driver}', [DriverController::class, 'destroy'])->name('drivers.destroy');
// });

// Route::delete('/{driver}', [DriverController::class, 'destroy'])->name('drivers.destroy');

// Route::group(['prefix' => 'races'], function () {
//     Route::get('/', [RaceController::class, 'index'])->name('races.index');
//     Route::post('/', [RaceController::class, 'store'])->name('races.store');
//     Route::get('/create', [RaceController::class, 'create'])->name('races.create');
//     Route::get('/{race}', [RaceController::class, 'show'])->name('races.show');
//     Route::get('/{race}/edit', [RaceController::class, 'edit'])->name('races.edit');
//     Route::put('/{race}', [RaceController::class, 'update'])->name('races.update');
//     Route::delete('/{race}', [RaceController::class, 'destroy'])->name('races.destroy');
// });

// Route::get('/carraces', [CarRaceController::class, 'index'])->name('carraces.index');
// Route::get('/carraces/{id}', [CarRaceController::class, 'show'])->name('carraces.show');
// Route::get('/carraces/create', [CarRaceController::class, 'create'])->name('carraces.create');
// Route::post('/carraces', [CarRaceController::class, 'store'])->name('carraces.store');
 




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

Route::resource('/drivers', UserDriverController::class)
->middleware(['auth', 'role:user,admin'])
->names('user.drivers')
->only(['index', 'show']);
Route::resource('/admin/drivers', AdminDriverController::class)->middleware(['auth', 'role:admin'])->names('admin.drivers');



Route::resource('/records', UserRecordsController::class)
->middleware(['auth', 'role:user,admin'])
->names('user.records')
->only(['index', 'show']);
Route::resource('/admin/records', AdminRecordsController::class)->middleware(['auth', 'role:admin'])->names('admin.records');



// The Car routes define two sets of resourceful controllers.
// One for regular users with limited actions and another for administrators with full CRUD accesibility.
// Middle ware is used for security and authentication and so is the AdminCarController.


Route::resource('/cars', UserCarController::class)
->middleware(['auth', 'role:user,admin'])
->names('user.cars')
->only(['index', 'show']);
Route::resource('/admin/cars', AdminCarController::class)->middleware(['auth', 'role:admin'])->names('admin.cars');


// php artisan route:list




Route::resource('/races', UserRaceController::class)
->middleware(['auth', 'role:user,admin'])
->names('user.races')
->only(['index', 'show']);
Route::resource('/admin/races', AdminRaceController::class)->middleware(['auth', 'role:admin'])->names('admin.races');

require __DIR__.'/auth.php';
