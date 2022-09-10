<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OfficeFactory extends Factory
{
    protected $model = Office::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
        ];
    }
}
