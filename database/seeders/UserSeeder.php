<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;
use Str;

class UserSeeder extends Seeder
{
    public function createAdmin()
    {
        return User::create([
            'name' => 'Talles',
            'email' => 'talles@gmail.com',
            'email_verified_at' => now(),
            'type' => 'administrador',
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(10)
        ]);
    }
    public function run(): void
    {
        User::factory(15)->create();
        $this->createAdmin();
    }
}
