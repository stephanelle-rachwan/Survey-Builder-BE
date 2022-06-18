<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTController;

Route::group(['middleware' => 'api'], function($router) {
    Route::post('/register', [JWTController::class, 'register']);
    Route::post('/login', [JWTController::class, 'login']);
    Route::post('/logout', [JWTController::class, 'logout']);
    Route::post('/refresh', [JWTController::class, 'refresh']);
    Route::post('/profile', [JWTController::class, 'profile']);
}); 

Route::group(['prefix' => 'admin'], function(){
    Route::post('/add-survey', [AdminController::class, "addSurveys"]); 
    Route::post('/add-questions', [AdminController::class, "addQuestions"]); 
    Route::post('/add-answers', [AdminController::class, "addAnswers"]); 
});
