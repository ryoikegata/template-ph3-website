<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    // use HasFactory;
    protected $table = 'choices';

    protected $fillable =
    [
        'choice',
        'is_correct',
    ];

    public function questions() {
        return $this->belongsTo('App\Models\Question');
    }


    public $timestamps = false;
}
