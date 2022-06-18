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
        $question_row = Survey::where('survey_name', $survey_name)->get();
        $survey_id = $question_row[0]['id'];
        $questions = Question::where('survey_id', $survey_id)->get();

        return response()->json([
            "status" => "success",
            "questions" => $questions
        ], 200);
    }

    public function getChoices (Request $request)
    {
        // get choices by question id
        // $question_id=$request->question_id;
        // $choices = Choice::where('question_id', $question_id)->get();

        // get choices by question content
        $content =$request->content;
        $question_row = Question::where('content', $content)->get();
        $question_id = $question_row[0]['id'];
        $choices = Choice::where('question_id', $question_id)->get();


        return response()->json([
            "status" => "success",
            "choices" => $choices
        ], 200);
    }

    public function addAnswers(Request $request)
    {
        $answer = new Answer;
        $answer->question_id = $request->question_id;
        $answer->value = $request->value;
        $answer->save();

        return response()->json([
            "status" => "Success",
        ], 200);
    }

}