<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DietchartController;
use App\Http\Controllers\Admin\DietcombinationController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('/make/combination', [GuestController::class, 'makeCombination'])->name('make.combination');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/user/list', [AdminController::class, 'user_list'])->name('admin.user_list');
    Route::get('/admin/doctor/list', [AdminController::class, 'doctor_list'])->name('admin.doctor_list');
    Route::resource('dietcombinations', DietcombinationController::class);
    Route::get('/dietcombination/trashed', [DietcombinationController::class, 'trashed'])->name('dietcombination.trashed');
    Route::resource('dietcharts', DietchartController::class);
    Route::get('/dietchart/trashed', [DietchartController::class, 'trashed'])->name('dietchart.trashed');
    Route::resource('foods', FoodController::class);
    Route::get('/food/trashed', [FoodController::class, 'trashed'])->name('food.trashed');
});

/*------------------------------------------
--------------------------------------------
All Doctor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:doctor'])->group(function () {
    Route::get('/doctor/dashboard', [HomeController::class, 'doctorDashboard'])->name('doctor.dashboard');
});
