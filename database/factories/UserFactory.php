<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserFactory extends Factory
{

    protected static ?string $password;


    public function definition(): array
    {
        return [
            'name' => 'Talles',
            'email' => 'talles@gmail.com',
            'email_verified_at' => now(),
            'type'=>'administrador',
            'password' =>Hash::make('123456'),
            'remember_token' => Str::random(10),
        ];
    }


    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
