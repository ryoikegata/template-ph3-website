<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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



    public function add() {
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
    }
}