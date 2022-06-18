<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Choice;
use App\Models\Question;
use App\Models\Survey;
use App\Models\User;

class AdminController extends Controller
{
    //
    // Route::post('/add-survey', [AdminController::class, "addSurveys"]); 
    // Route::post('/add-questions', [AdminController::class, "addQuestions"]); 
    // Route::post('/add-choices', [AdminController::class, "addChoices"]); 

    public function addSurveys(Request $request)
    {
        $survey = new Survey;
        $survey->survey_name = $request->survey_name;
        $survey->save();

        return response()->json([
            "status" => "Success",
        ], 200);
    }

    
}
