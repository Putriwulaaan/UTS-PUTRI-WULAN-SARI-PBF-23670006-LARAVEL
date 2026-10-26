<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;

// Landing Page Routes
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/shop', [LandingPageController::class, 'shop'])->name('landing.shop');
Route::get('/shop-detail', [LandingPageController::class, 'shopDetail'])->name('landing.shopDetail');
Route::get('/cart', [LandingPageController::class, 'cart'])->name('landing.cart');
Route::get('/chackout', [LandingPageController::class, 'chackout'])->name('landing.chackout');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('landing.contact');

// Admin Routes
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/fullcalender', [AdminController::class, 'fullcalender'])->name('admin.fullcalender');
Route::get('/admin/modals', [AdminController::class, 'modals'])->name('admin.modals');
Route::get('/admin/form-elements', [AdminController::class, 'formElements'])->name('admin.form-elements');
Route::get('/admin/datatable', [AdminController::class, 'datatable'])->name('admin.datatable');
