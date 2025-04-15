<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'), // رمز فیک
            'role' => $this->faker->randomElement(['user', 'admin']),
           'location_id' => null,

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
