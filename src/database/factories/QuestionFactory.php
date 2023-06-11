<?php
namespace Database\Factories;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\QuizzesFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
    * @var string
    */
   protected $model = Question::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'question' => $this->faker->realText(),
            // 'quiz_id' => Quiz::factory(),
        ];
    }
}
