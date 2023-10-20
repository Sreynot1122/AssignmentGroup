<?php
use  App\Http\Controllers\FrontPageController;

use Illuminate\Support\Facades\Route;

Route::get('/front',function(){
    return view("front_home");
});
Route::get('/home',function(){
    return view("front_home");
});
Route::get('/', [FrontPageController::class,'home'])->name('front.home');
Route::get('/about', [FrontPageController::class,'about'])->name('front.about');
Route::get('/service', [FrontPageController::class,'service'])->name('front.service');
Route::get('/appointment', [FrontPageController::class,'appointment'])->name('front.appointment');
Route::get('/doctors', [FrontPageController::class,'Doctors'])->name('front.doctors');
Route::get('/feature', [FrontPageController::class,'feature'])->name('front.feature');
Route::get('/footer', [FrontPageController::class,'footer'])->name('front.footer');
Route::get('/out_doctors', [FrontPageController::class,'out_doctors'])->name('front.out_doctors');
Route::get('/testimonial', [FrontPageController::class,'testimonial'])->name('front.testimonial');
Route::get('/page', [FrontPageController::class,'page'])->name('front.page');

Route::get('/contact', [FrontPageController::class,'contact'])->name('front.contact');




