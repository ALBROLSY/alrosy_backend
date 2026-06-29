<?php

namespace Database\Factories;
use App\Models\user1;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user1>
 */
class user1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = user1::class;
    public function definition(): array
    {
        return [
            'user_name'=> fake()->userName(),
            'email'=> fake()->unique()->safeEmail(),
            'password'=>Hash::make('password'),
            'phone'=> fake()->regexify('01[0-2][0-9]{8}'),
            'gender'=> fake()->randomElement(['male','female']),
            'role'=> fake()->randomElement(['owner','admin','user']),
        ];
    }
}
