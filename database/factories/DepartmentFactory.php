<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;

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
                'branch_id' => Branch::factory()->withRelations()->create()->id,
            ];
        });
    }
}
