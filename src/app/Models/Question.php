<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mockery\Undefined;
use Illuminate\Support\Facades\Validator;

class Question extends Model
{
    // use HasFactory;
    protected $table = 'questions';

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable =
    [
        'question',
    ];

    public function choices() {
        return $this->hasMany('App\Models\Choice');
    }

    public $timestamps = false;



    public function add($data) {

        // バリデーション
        $validator = Validator::make($data, [
            'question' => 'required|max:50',
            'choice1' => 'required|max:25',
            'choice2' => 'required|max:25',
            'choice3' => 'required|max:25',
        ]);

        if ($validator->fails()) {
            // バリデーションエラーがある場合はエラーメッセージを返すなどの適切な処理を行う
            session()->flash('message', 'クイズの作成に失敗しました');
        return redirect()->route('admin.create');
        }else {

        $quiz = new self();
        $quiz->question = $data['question'];
        $quiz->save();



        $selectedChoices = $data['selected'] ?? [];
        for ($i = 1; $i <= 3; $i++) {
            $choiceValue = $data['choice' . $i];
            if (!empty($choiceValue)) {
                $choice = new Choice();
                $choice->question_id = $quiz->id;
                $choice->choice = $choiceValue;
                $choice->is_correct = in_array($i, $selectedChoices) ? 1 : 0;
                $choice->save();
            }
        }

        session()->flash('message', 'クイズを作成しました');
        return redirect()->route('admin.index');
        }
    }

}