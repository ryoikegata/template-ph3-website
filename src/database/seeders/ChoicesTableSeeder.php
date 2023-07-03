<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // factoryで自動生成したやり方↓
        // Choice::factory()->count(9)->create();
        $choices = [
            [
            'choice' => '新宿',
            'is_correct' => 0,
            'question_id' => 1,
        ],
            [
            'choice' => '昭島',
            'is_correct' => 0,
            'question_id' => 1,
        ],
            [
            'choice' => '立川',
            'is_correct' => 1,
            'question_id' => 1,
        ],
            [
            'choice' => 'りょう',
            'is_correct' => 1,
            'question_id' => 2,
        ],
            [
            'choice' => 'こうしろう',
            'is_correct' => 0,
            'question_id' => 2,
        ],
            [
            'choice' => 'りゅうせい',
            'is_correct' => 0,
            'question_id' => 2,
        ],
            [
            'choice' => 'ディズニー',
            'is_correct' => 0,
            'question_id' => 3,
        ],
            [
            'choice' => '柏',
            'is_correct' => 0,
            'question_id' => 3,
        ],
            [
            'choice' => 'ゆうきの家',
            'is_correct' => 1,
            'question_id' => 3,
        ],
            [
            'choice' => 'ゆうき',
            'is_correct' => 0,
            'question_id' => 4,
        ],
            [
            'choice' => 'みのり',
            'is_correct' => 0,
            'question_id' => 4,
        ],
            [
            'choice' => 'ミッキー',
            'is_correct' => 1,
            'question_id' => 4,
        ],
            [
            'choice' => 'りゅうせい',
            'is_correct' => 0,
            'question_id' => 5,
        ],
            [
            'choice' => 'おのかん',
            'is_correct' => 1,
            'question_id' => 5,
        ],
            [
            'choice' => 'こうしろう',
            'is_correct' => 0,
            'question_id' => 5,
        ],
            [
            'choice' => '昭島',
            'is_correct' => 0,
            'question_id' => 6,
        ],
            [
            'choice' => '表参道',
            'is_correct' => 1,
            'question_id' => 6,
        ],
            [
            'choice' => '八王子',
            'is_correct' => 0,
            'question_id' => 6,
        ],
        ];
        DB::table('choices')->insert($choices);
    }
}