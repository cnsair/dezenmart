<?php

use Illuminate\Support\Facades\Route;




//=======================================
//Guest/Homepage Routes
//=======================================

Route::middleware('guest')->group(function () {

    // Homepage
    Route::get('/', function () {
        return view('home.home');
    })->name('home');

});







//view installed PHP information
Route::get('/phpinfo', function() {
    phpinfo();
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        // return redirect()->route('redirects');
        abort(403, 'Unauthorised action!');
    })->name('dashboard');
});
