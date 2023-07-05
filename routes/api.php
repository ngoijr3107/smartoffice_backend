<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SiteController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// visitors routes
Route::get('getVisitors', [VisitorController::class, 'getVisitors'])->name('getVisitors');
Route::post('checkIn', [VisitorController::class, 'checkIn'])->name('checkIn');

// purposes routes
Route::get('getPurpose', [PurposeController::class, 'getPurpose'])->name('getPurpose');
Route::post('storePurpose', [PurposeController::class, 'storePurpose'])->name('storePurpose');

// department routes
Route::get('getDepartment', [DepartmentController::class, 'getDepartment'])->name('getDepartment');
Route::post('storeDepartment', [DepartmentController::class, 'storeDepartment'])->name('storeDepartment');

// sites routes
Route::get('getSite', [SiteController::class, 'getSite'])->name('getSite');
Route::post('storeSite', [SiteController::class, 'storeSite'])->name('storeSite');
