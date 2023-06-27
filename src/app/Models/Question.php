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
}
