<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show_quizzes(Request $request)
    {
        $questions = Question::with('choices')->get();
        return view('user.quiz', compact('questions'));
    }

    public function detail(Request $request, $id)
    {
        $question = Question::with('choices')->where('id',$id)->get();
        return view('user.detail', compact('question'));
    }


    public function destroy ($id)
    {
        $question = Question::with('choices')->where('id',$id);
        $question->delete();
        return redirect(route('quizzes'));
    }
}
