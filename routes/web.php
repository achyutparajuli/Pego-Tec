<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;

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


/*
|--------------------------------------------------------------------------
| Customer End Routes => role == user
|--------------------------------------------------------------------------
|
*/

Route::get('/', [HomeController::class, 'index'])->name('web.home');
Route::get('pages/{slug}', [PageController::class, 'show'])->name('web.pages.show'); // route for view pages passing the slug


/*
|--------------------------------------------------------------------------
| Common Login & Login Routes => 
|--------------------------------------------------------------------------
|
*/
Route::get('login', [LoginController::class, 'index'])->name('login.index'); // displays login form, which will be common for both user and admin.
Route::post('login', [LoginController::class, 'submit'])->name('login.submit'); // displays login form, which will be common for both user and admin.
Route::get('logout', [LoginController::class, 'logout'])->name('logout'); // displays login form, which will be common for both user and admin.


/*
|--------------------------------------------------------------------------
| Admin Routes => 
|--------------------------------------------------------------------------
|
*/
Route::middleware(['auth', 'adminCheck'])->prefix('admin')->group(function ()
{
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');

    Route::get('pages', [AdminPageController::class, 'index'])->name('admin.pages.index');
    Route::get('pages/create', [AdminPageController::class, 'create'])->name('admin.pages.create');
    Route::post('pages/store', [AdminPageController::class, 'store'])->name('admin.pages.store');
    Route::get('pages/edit/{slug}', [AdminPageController::class, 'edit'])->name('admin.pages.edit');
    Route::post('pages/update/', [AdminPageController::class, 'update'])->name('admin.pages.update');
    Route::get('pages/destroy/{slug}', [AdminPageController::class, 'destroy'])->name('admin.pages.destroy');
});
