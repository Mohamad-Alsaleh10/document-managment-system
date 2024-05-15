<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('api');


Route::middleware(['api'])->group(function () {

    //////////////////////////////// Category Requests //////////////////////////////////

    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('category/{category}', [CategoryController::class, 'show']);
    Route::post('category/{category}/follow', [CategoryController::class, 'follow']);
    Route::post('category-create', [CategoryController::class, 'store'])->middleware('is_admin');
    Route::put('category/{category}/update', [CategoryController::class, 'update'])->middleware('is_admin');
    Route::delete('category/{category}/delete', [CategoryController::class, 'destroy'])->middleware('is_admin');


    ///////////////////////////////// Comment Requests //////////////////////////////////

    Route::get('comments', [CommentController::class, 'index']);
    Route::get('comment/{comment}', [CommentController::class, 'show']);
    Route::get('document/{document}/download', [DocumentController::class, 'download']);
    Route::post('category/{category}/comment', [CommentController::class, 'categoryStore']);
    Route::post('document/{document}/comment', [CommentController::class, 'documentStore']);
    Route::put('comment/{comment}/update', [CommentController::class, 'update'])->middleware('vrefy_update');
    Route::delete('comment/{comment}/delete', [CommentController::class, 'destroy'])->middleware('vrefy_delete');


    //////////////////////////////// Document Requests //////////////////////////////////


    Route::get('documents', [DocumentController::class, 'index']);
    Route::get('document/{document}', [DocumentController::class, 'show']);
    Route::post('document-create', [DocumentController::class, 'store']);
    Route::put('document/{document}/update', [DocumentController::class, 'update'])->middleware('vrefy_update');
    Route::delete('document/{document}/delete', [DocumentController::class, 'destroy'])->middleware('vrefy_delete');


    ////////////////////////////// Notification Requests ////////////////////////////////

    Route::get('notifications/', [NotificationController::class, 'index']);
    Route::get('notifications-unRead/', [NotificationController::class, 'getNotificationUnRead']);
    Route::put('notifications/{notification}/read', [NotificationController::class, 'read']);


});

