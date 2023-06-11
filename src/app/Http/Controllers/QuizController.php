<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::with('choices')->get();
        return view('user.quiz', compact('questions'));
    }

    public function show($id)
    {
        $question = Question::with('choices')->where('id',$id)->get();
        return view('user.show', compact('question'));
    }

    public function create()
    {
        return view('user.create');
    }


    public function destroy ($id)
    {
        $question = Question::with('choices')->where('id',$id);
        $question->delete();
        session()->flash('message', 'クイズを削除しました。');
        return redirect(route('quizzes'));
    }
}
