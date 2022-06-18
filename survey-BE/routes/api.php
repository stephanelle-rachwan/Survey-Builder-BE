<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    Route::post('/add-choices', [AdminController::class, "addChoices"]); 
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/get-survey', [UserController::class, "getSurveys"]); 
    Route::get('/get-questions', [UserController::class, "getQuestions"]); 
    Route::get('/get-choices', [UserController::class, "getChoices"]); 
    Route::post('/add-answers', [UserController::class, "addAnswers"]); 
});
