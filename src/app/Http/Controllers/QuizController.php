<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function index() {
        return view('user.top');
        }

    public function show_quizzes()
    {
        $questions = Question::with('choices')->get();
        return view('user.quiz', compact('questions'));
    }

    public function detail($id)
    {
        $question = Question::with('choices')->where('id',$id)->get();
        return view('user.detail', compact('question'));
    }


    public function destroy ($id)
    {
        $question = Question::with('choices')->where('id',$id);
        $question->delete();
        session()->flash('message', 'クイズを削除しました。');
        return redirect(route('quizzes'));
    }
}
