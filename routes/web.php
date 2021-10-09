<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;

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
// admin protected routes
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/',[AdminController::class,'index']); 

    Route::get('/admin_dashboard',[AdminController::class,'dashboard'])->name('admin_dashboard'); 

    Route::get('/users',[AdminController::class,'users']); 

});


// Route::get('/', function () {
//     return view('welcome');
// });

// USER DASHBOARD
Route::middleware(['auth','user'])->group(function () {
    Route::get('/',[HomeController::class,'index']); 

    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'user'])->name('dashboard');
// 
// ADMIN DASHBOARD
// Route::get('/admin_dashboard', function () {
//     return view('admin_dashboard');
// })->middleware(['auth', 'admin'])->name('admin_dashboard');





require __DIR__.'/auth.php';

