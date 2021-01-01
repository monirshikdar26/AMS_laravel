<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stu_id' => $this->faker->numberBetween(1000,4000),
            'name'=> $this->faker->name($gender = 'male'|'female'),
            'department' => $this->faker->text(10)
        ];
    }
}
