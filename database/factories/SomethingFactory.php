<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Something;
use Illuminate\Database\Eloquent\Factories\Factory;

class SomethingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Something::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }

    /**
     * Define the model's state with all possible relations.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withRelations()
    {
        return $this->state(function (array $attributes) {
            return [
                'department_id' => Department::factory()->withRelations()->create()->id,
            ];
        });
    }
}
