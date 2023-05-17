<?php

namespace Database\Factories;

use App\Models\Khoroch;
use Illuminate\Database\Eloquent\Factories\Factory;

class KhorochFactory extends Factory
{
    protected $model = Khoroch::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
