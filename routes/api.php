<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitRequestController;
use App\Http\Controllers\FranchiseApplicationController;


Route::post('/visit-requests', [VisitRequestController::class, 'store']);
Route::post('/franchise-applications', [FranchiseApplicationController::class, 'store']);
