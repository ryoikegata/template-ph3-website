<?php

namespace Database\Seeders;
use App\Models\Question;
use Database\Factories\QuestionsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // factoryで自動生成したやり方↓
        // Question::factory()->count(3)->create();
        $questions = [
            [
            'question' => '東京の中心は？',
            'image' => '',
        ],
            [
            'question' => '東京の有名人は？',
            'image' => '',
        ],
            [
            'question' => '千葉の中心は？',
            'image' => '',
        ],
            [
            'question' => '千葉の有名人は？',
            'image' => '',
        ],
            [
            'question' => 'Posse２の代表は？',
            'image' => '',
        ],
            [
            'question' => 'harborsはどこ？',
            'image' => '',
        ],
        ];
        DB::table('questions')->insert($questions);
    }
}