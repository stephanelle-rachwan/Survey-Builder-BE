<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Choice;
use App\Models\Question;
use App\Models\Survey;
use App\Models\User;

class UserController extends Controller
{
    //
    // Route::get('/get-survey', [UserController::class, "getSurveys"]); done + tested
    // Route::get('/get-questions', [UserController::class, "getQuestions"]); 
    // Route::get('/get-choices', [UserController::class, "getChoices"]); 
    // Route::post('/add-answers', [UserController::class, "addAnswers"]); 

    public function getSurveys(Request $request)
    {
        $surveys = Survey::all();
        return response()->json([
            "status" => "success",
            "surveys" => $surveys
        ], 200);
    }
}
