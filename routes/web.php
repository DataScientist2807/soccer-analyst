<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterIndexController;
use App\Http\Controllers\Auth\LoginIndexController;
use App\Http\Controllers\Account\AccountIndexController;
use App\Http\Controllers\Account\SecurityIndexController;
use Laravel\Fortify\Features;
use Illuminate\Auth\Middleware\RequirePassword;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/dashboard', DashboardController::class)->name('dashboard');
/* Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware(RequirePassword::using(null, 1));
 */
Route::get('/auth/register', RegisterIndexController::class)->name('auth.register');
Route::get('/auth/login', LoginIndexController::class)->name('auth.login');
if (Features::enabled(Features::updateProfileInformation())) {
    Route::get('/account', AccountIndexController::class)->name('account.index');
}
if (Features::hasSecurityFeatures()) {
    Route::get('/account/security', SecurityIndexController::class)->name('account.security.index');
}

require __DIR__ . '/fortify.php';
