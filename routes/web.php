<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WhoWeAreController;
use App\Http\Controllers\FactoryOutletController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ContactInformationController;
use App\Http\Controllers\CompanyInformationController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;

use App\Models\Document;




Route::get('/api/herocontent', [HeroController::class, 'index']);
Route::get('/api/products', [ProductController::class, 'index']);
Route::get('/api/whoweare', [WhoWeAreController::class, 'index']);
Route::get('/api/factoryoutlet', [FactoryOutletController::class, 'index']);
Route::get('/api/gallery', [GalleryController::class, 'index']);
Route::get('/api/testimonials', [TestimonialController::class, 'index']);
Route::get('/api/testimonials/featured', [TestimonialController::class, 'featured']);
Route::get('/api/documents', [DocumentController::class, 'index']);
Route::get('/api/documents/{document}/download', [DocumentController::class, 'download'])
    ->name('documents.download');
Route::get('/api/contact', [ContactInformationController::class, 'index']);
Route::get('/api/companyinformation', action: [CompanyInformationController::class, 'index']);


Route::get('/api/blog', [BlogController::class, 'index']);
Route::get('/api/blog/recent', [BlogController::class, 'recent']);
Route::get('/api/blog/category/{category}', [BlogController::class, 'byCategory']);
Route::get('/api/blog/{slug}', [BlogPostController::class, 'show']);