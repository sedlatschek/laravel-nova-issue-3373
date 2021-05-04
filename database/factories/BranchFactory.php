<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Branch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
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
                'organisation_id' => Organisation::factory()->create()->id,
            ];
        });
    }
}
