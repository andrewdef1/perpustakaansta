<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware(['throttle:global'])->group(function () {

    Route::get('/', function () {
        return view('auth.login');
    });

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile');;

    //Menghapus fitur registrasi ~ jadi jika akses /register akan masuk ke login langsung
    Route::match(["GET", "POST"], "/register", function(){
        return redirect("/login");
    })->name("register");




});