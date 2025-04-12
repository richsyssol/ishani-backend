<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WhoWeAreController;
use App\Http\Controllers\FactoryOutletController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;



Route::get('/api/herocontent', [HeroController::class, 'index']);
Route::get('/api/products', [ProductController::class, 'index']);
Route::get('/api/whoweare', [WhoWeAreController::class, 'index']);
Route::get('/api/factoryoutlet', [FactoryOutletController::class, 'index']);
Route::get('/api/gallery', [GalleryController::class, 'index']);
Route::get('/api/testimonials', [TestimonialController::class, 'index']);
Route::get('/api/testimonials/featured', [TestimonialController::class, 'featured']);


