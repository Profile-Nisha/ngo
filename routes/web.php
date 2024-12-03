<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationDetailsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::view('/', 'front.index')->name('home');


Route::view('/about', 'front.about')->name('about');

// our vision
Route::view('/our-vision/surendra-mishra', 'front.our-vision.surendra-mishra')->name('our-vision.surendra-mishra');
Route::view('/our-vision/dinesh-khandelwal', 'front.our-vision.dinesh-khandelwal')->name('our-vision.dinesh-khandelwal');
Route::view('/our-vision/rudra-kumar-mishra', 'front.our-vision.rudra-kumar-mishra')->name('our-vision.rudra-kumar-mishra');
Route::view('/our-vision/ravi-kumar', 'front.our-vision.ravi-kumar')->name('our-vision.ravi-kumar');

// Events
Route::view('/events', 'front.events')->name('events');

// Join Us
Route::view('/join', 'front.join')->name('join');

// Login
Route::view('/login1', 'front.login')->name('login1');

Route::view('/signup', 'front.signup')->name('signup');

// Gallery
Route::view('/gallery', 'front.gallery')->name('gallery');

// Contact
Route::view('/contact', 'front.contact')->name('contact');

// Donate
Route::view('/donate', 'front.donate')->name('donate');
Route::view('/payment', 'front.payment')->name('payment');
// Route::view('/payment-success', 'front.payment-success')->name('payment-success');
Route::any('/payment-success', [DonationDetailsController::class, 'paymentSuccess'])->name('payment-success');
// Terms & Conditions
Route::view('/terms-and-conditions', 'front.termcondition')->name('termcondition');

// Privacy Policy
Route::view('/privacy-policy', 'front.privacypolicy')->name('privacypolicy');

// Refund Policy
Route::view('/refund-policy', 'front.refundpolicy')->name('refundpolicy');


Route::post('/donate', [DonationController::class, 'store'])->name('donate');
Route::post('/donation', [DonationDetailsController::class, 'store'])->name('donation.store');

Route::post('contact', [ContactFormController::class, 'store'])->name('contact.store');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
