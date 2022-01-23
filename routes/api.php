<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ============= Public Routes===============
/* 
Route::get('/students',[StudentController::class,'index']);
Route::get('/students/{id}',[StudentController::class,'show']);
Route::post('/students',[StudentController::class,'store']);
Route::put('/students/{id}',[StudentController::class,'update']);
Route::get('/students/search/{city}',[StudentController::class,'search']);
Route::delete('/students/{id}',[StudentController::class,'destroy']);

 */

Route::post('/register', [UserController::class, 'register']);
Route::post('/login',[UserController::class,'login']);
//================== Protected Routes==================

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/students/{id}', [StudentController::class, 'show']);
    Route::post('/students', [StudentController::class, 'store']);
    Route::put('/students/{id}', [StudentController::class, 'update']);
    Route::get('/students/search/{city}', [StudentController::class, 'search']);
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);
    Route::post('/logout',[UserController::class,'logout']);
    
});








/* 
Route::get('/students', function () {
    return "OK";
}); */
