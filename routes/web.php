<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/signup', function () { return view('signup'); });
Route::get('/more', function () { return view('more'); })->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('/pay', function () { return view('pay'); })->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('/profile',[App\Http\Controllers\TenantController::class, 'profile'])->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('/dash', [App\Http\Controllers\TenantController::class, 'dashboard'])->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('/payments', [App\Http\Controllers\TenantController::class, 'viewPayments'])->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('/deposits', [App\Http\Controllers\TenantController::class, 'viewDeposits'])->middleware(App\Http\Middleware\AuthCheck::class);

//posts
Route::post('/register', [AuthController::class, 'registerUser'])->name('client.register');
Route::post('/login', [AuthController::class, 'login'])->name('client.login');
Route::post('/addmore', [AuthController::class, 'addMore'])->name('client.more');
Route::post('/payment', [AuthController::class, 'makePayment'])->name('client.pay');
Route::get('/logout', [AuthController::class, 'logout'])->name('client.logout');