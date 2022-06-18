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

    public function getQuestions(Request $request)
    {
        // get questions by survey id
        // http://127.0.0.1:8000/api/v1/user/get-questions?survey_id=1 hone we're getting it by survey_id is 1
        // $survey_id=$request->survey_id;
        // $questions = Question::where('survey_id', $survey_id)->get();

        // get questions by survey name
        $survey_name =$request->survey_name;
        $survey_row = Survey::where('survey_name', $survey_name)->get();
        $survey_id = $survey_row[0]['id'];
        $questions = Question::where('survey_id', $survey_id)->get();

        return response()->json([
            "status" => "success",
            "questions" => $questions
        ], 200);
    }

    

}