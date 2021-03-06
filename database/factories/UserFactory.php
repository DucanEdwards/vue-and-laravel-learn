<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'mobile'=>$this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            // 'avatar'=>$this->faker->imageUrl(100,100),
            'email_verified_at' => now(),
            'password' => Hash::make('admin888'),
            'remember_token' => Str::random(10),
        ];
    }
}
