<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    public function definition(): array
    {
        $user = User::where('type', 'cliente')->inRandomOrder()->first();
        $product = Product::where('amount', '>', 0)->inRandomOrder()->first();
        $type = fake()->randomElement(['parcelada', 'avista']);
        return [
            'user_id'=>$user->id,
            'product_id'=>$product->id,
            'type'=>$type,
            'prize'=>$type == "avista" ? ($product->prize - $product->prize * 0.05):$product->prize ,
            'created_at'=>fake()->dateTimeBetween('- 1 year', 'now')
        ];
    }
}
