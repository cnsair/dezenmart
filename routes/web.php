<?php

use App\Http\Controllers\GuestMessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;




//=======================================
//Guest/Homepage Routes
//=======================================

Route::middleware('guest')->group(function () {

    // Homepage
    Route::get('/', function () {
        return view('home.home');
    })->name('home');

    // About Us
    Route::get('/about-us', function () {
        return view('home.about-us');
    })->name('about-us');

    // Contact Us
    Route::get('/contact-us', function () {
        return view('home.contact-us');
    })->name('contact-us');

    // store Contact Us/guest message
    Route::post('/contact-us', [GuestMessageController::class, 'store'])
        ->name('guest-message.store');

});





//===================================================
//      AUTHENTICATION REDIRECTS
//==================================================

Route::group(['middleware' => 'auth'], function() {

    //Main Redirect Controller
    Route::get('redirects', [RedirectController::class, 'index'])
    ->name('user.redirect');
    

    //===========================
    // Common pages
    //===========================

    // List products
    Route::get('/common/products', [ProductController::class, 'index'])
    ->name('product.index');

    // Add product
    Route::get('/common/add-product', [ProductController::class, 'create'])
        ->name('product.create');

    // Save product
    Route::post('/common/add-product', [ProductController::class, 'store'])
        ->name('product.store');

    // view edit product
    Route::get('/common/{product}/show-product', [ProductController::class, 'show'])
        ->name('product.show');

    // view edit product
    Route::get('/common/{product}/edit-product', [ProductController::class, 'edit'])
        ->name('product.edit');

    // view edit product
    Route::patch('/common/{product}/edit-product', [ProductController::class, 'update'])
        ->name('product.update');

    // view edit product
    Route::delete('/common/{product}/show-product', [ProductController::class, 'destroy'])
        ->name('product.destroy');



    //===========================
    //Must be Admin
    //===========================

    Route::group(['middleware' => 'admin'], function() {

        // View dashboard
        Route::get('/admin/dashboard', [ProductController::class, 'temporary'])
        ->name('admin.dashboard');
        
        //view dashboard
        // Route::get('/admin/dashboard', function () {
        //     return view('admin.dashboard'); })
        //     ->name('admin.dashboard');

        // store Contact Us/guest message
        Route::get('/admin/guest-message', [GuestMessageController::class, 'show'])
            ->name('guest-message.show');

        //Edit page
        Route::get('/admin/{feedback}/guest-message', [GuestMessageController::class,'edit'])
            ->name('guest-message.edit');

        //delete action
        Route::delete('/admin/{feedback}/guest-message', [GuestMessageController::class, 'destroy'])
            ->name('guest-message.destroy');

        //Toggle betweeen Read and Not-Read
        // Route::put('/admin/{feedback}/guest-message', function (GuestMessageController $feedback){
        //     $feedback->toggleStatus();
        //     return redirect()->back()->with('success','done');
        // })->name('upload.toggle');
    });


    //===========================
    //Must be Member
    //===========================
    Route::group(['middleware' => 'member'], function() {

        // View dashboard
        Route::get('/member/dashboard', [ProductController::class, 'temporary'])
        ->name('member.dashboard');

        //view dashboard
        // Route::get('/member/dashboard', function () {
        //     return view('member.dashboard'); })
        //     ->name('member.dashboard');

        //view payment page
        Route::get('/member/full-access', function () {
            return view('member.full-access'); })
            ->name('member.full-access');

        //view payment page
        Route::get('/member/testimonial', function () {
            return view('member.testimonial'); })
            ->name('member.testimonial');
        
        //Show page
        // Route::get('/member/show-job', [PostjobController::class, 'show'])
        //     ->name('member.job.show');

    });

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
        return redirect()->route('user.redirect');
        // abort(403, 'Unauthorised action!');
    })->name('dashboard');
});


// Route::fallback(function () {
//     return 'Route not found!';
// });
