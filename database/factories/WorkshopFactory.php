<?php

namespace Database\Factories;

use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WorkshopFactory extends Factory
{
    protected $model = Workshop::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'address' => $this->faker->name,
			'cost_center' => $this->faker->name,
			'workstation_id' => $this->faker->name,
        ];
    }
}
