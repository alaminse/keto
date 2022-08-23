<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

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
});

/*------------------------------------------
--------------------------------------------
All Doctor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:doctor'])->group(function () {

    Route::get('/doctor/dashboard', [HomeController::class, 'doctorDashboard'])->name('doctor.dashboard');
});
