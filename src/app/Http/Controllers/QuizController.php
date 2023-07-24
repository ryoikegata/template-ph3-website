<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function index()
    {
        // if ($q == 'q') {
        //     $questions = Question::with('choices')->get();
        //     return   view('quiz', compact('questions'));
        // }
        $questions = Question::with('choices')->paginate(3);
        $d_questions = Question::onlyTrashed()->get();
        return   view('admin.index', compact('questions','d_questions'));
    }

    public function show($id, Request $request)
    {
        $question = Question::with('choices')->where('id',$id)->get();
        return view('admin.show', compact('question'));
    }

    public function create()
    {
        return view('admin.create');
    }


    public function edit($id)
    {
        $question = Question::with('choices')->where('id',$id)->get();
        return view('admin.edit', compact('question'));
    }




    public function store(Request $request)
{
    $data = $request->all();
    $question = new Question();
    $question->add($data);
    return  redirect()->route('admin.index');
}


public function update (Request $request, $id)
{
        $data = $request->all();
                        // バリデーション
                        $validator = Validator::make($data, [
                            'question' => 'required|max:200',
                            'choices1' => 'required|max:100',
                            'choices2' => 'required|max:100',
                            'choices3' => 'required|max:100',
                        ]);
                
                        if ($validator->fails()) {
                            // バリデーションエラーがある場合はエラーメッセージを返すなどの適切な処理を行う
                            session()->flash('message', 'クイズの編集に失敗しました');
                            return redirect()->route('admin.edit', ['admin' => $id])->withErrors($validator)->withInput();
                        }else {
        $question = Question::findOrFail($id);
        $question->question = $data['question'];
        $question->save();

        
        $choices = [];
        for ($i = 1; $i <= 3; $i++) {
            $choiceValue = $data['choices' . $i];
            $choiceId = $data['choiceIds' . $i];
            $selectedChoice = isset($data['selected' . $i]) ? 1 : 0;
            
            
            $choice = Choice::findOrFail($choiceId);
            $choice->choice = $choiceValue;
            $choice->is_correct = $selectedChoice;
            
            $choice->save();
            $choices[] = $choice;
        }
        session()->flash('message', 'クイズの更新がされました');
        return redirect()->route('admin.index');
                        }
    }


    public function destroy ($id)
    {
        $question = Question::with('choices')->where('id',$id);
        $question->delete();
        session()->flash('message', 'クイズを削除しました。');
        return redirect()->route('admin.index');
    }
}
