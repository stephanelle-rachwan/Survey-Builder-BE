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

    public function addChoices(Request $request)
    {
        $choice = new Choice;
        $choice->question_id = $request->question_id;
        $choice->value = $request->value;
        $choice->save();

        return response()->json([
            "status" => "Success",
        ], 200);
    }

}
