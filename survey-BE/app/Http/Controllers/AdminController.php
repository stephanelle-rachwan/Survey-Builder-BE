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

    public function addQuestions(Request $request)
    {
        $question = new Question;
        $question->survey_id = $request->survey_id;
        $question->content = $request->content;
        $question->radio = $request->radio;
        $question->checkbox = $request->checkbox;
        $question->text = $request->text;
        $question->email = $request->email;
        $question->linear_scale = $request->linear_scale;
        $question->dropdown = $request->dropdown;
        $question->save();

        return response()->json([
            "status" => "Success",
        ], 200);
    }

}
