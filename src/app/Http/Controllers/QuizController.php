<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Choice;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index($parameter)
    {
        $questions = Question::with('choices')->get();
        if ($parameter === 'q'){
            return   view('quiz', compact('questions'));
            
        }
        return   view('quiz.quiz', compact('questions'));
    }

    public function show($id)
    {
        $question = Question::with('choices')->where('id',$id)->get();
        return view('quiz.show', compact('question'));
    }

    public function create()
    {
        return view('quiz.create');
    }


    public function edit($id)
    {
        $question = Question::with('choices')->where('id',$id)->get();
        return view('quiz.edit', compact('question'));
    }




    public function store(Request $request)
{
    $question = new Question();
    $question->question = $request->question;

    $question->save();


    $selectedChoices = $request->input('selected', []);
    for ($i = 1; $i <= 3; $i++) {
        $choiceValue = $request->input('choice' . $i);
        if (!empty($choiceValue)) {
            $choice = new Choice();
            $choice->question_id = $question->id;
            $choice->choice = $choiceValue;
            $choice->is_correct = in_array($i, $selectedChoices) ? 1 : 0;
            $choice->save();
        }
    }

    return  redirect()->route('quiz.index');
}


public function update (Request $request, $id)
{

        $req = $request->all();
        $question = Question::findOrFail($id);
        $question->question = $req['question'];
        $question->save();

        //  dd($req);
        $choices = [];
        for ($i = 1; $i <= 3; $i++) {
            $selectedChoice = $request->input('selected' . $i);
            $choiceValue = $req['choice' . $i . '_'];
            $choiceId = $req['choice_id' . $i];
    
            $choice = Choice::findOrFail($choiceId);
            $choice->choice = $choiceValue;
            // 選択された値に対する処理を行う
            if ($selectedChoice !== null) {
                $choice->is_correct = 1;
            } else {
                $choice->is_correct = 0;
            }
        
            $choice->save();
    
            $choices[] = $choice;
        }

    session()->flash('message', 'クイズを更新しました');
    return redirect()->route('quiz.index');
    }


    public function destroy ($id)
    {
        $question = Question::with('choices')->where('id',$id);
        $question->delete();
        session()->flash('message', 'クイズを削除しました。');
        return redirect(route('quiz.index'));
    }
}
