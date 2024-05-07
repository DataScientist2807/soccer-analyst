<?php
use Laravel\Fortify\RoutePath;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Illuminate\Support\Facades\Route;

Route::get(RoutePath::for('password.confirm', '/user/confirm-password'), [ConfirmablePasswordController::class, 'show'])
->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')]);
