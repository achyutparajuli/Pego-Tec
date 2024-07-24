<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [HomeController::class, 'index'])->name('web.home');


Route::get('pages/{slug}', [PageController::class, 'show'])->name('web.pages.show'); // route for view pages passing the slug



Route::get('login', [LoginController::class, 'index'])->name('login.index'); // displays login form, which will be common for both user and admin.
Route::post('login', [LoginController::class, 'submit'])->name('login.submit'); // displays login form, which will be common for both user and admin.
Route::get('logout', [LoginController::class, 'logout'])->name('logout'); // displays login form, which will be common for both user and admin.
