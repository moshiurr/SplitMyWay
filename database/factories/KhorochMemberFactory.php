<?php

namespace Database\Factories;

use App\Models\KhorochMember;
use Illuminate\Database\Eloquent\Factories\Factory;

class KhorochMemberFactory extends Factory
{
    protected $model = KhorochMember::class;

    public function definition(): array
    {
        return [
            'khoroch_id' => $this->faker->randomNumber(),
            'user_id' => $this->faker->randomNumber(),
            'role' => $this->faker->randomNumber(),
        ];
    }
}
