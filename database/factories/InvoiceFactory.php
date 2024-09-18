<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;


class InvoiceFactory extends Factory
{
    private static $usedPurchaseIds = [];
    public function definition(): array
    {
        do {
            $purchase = Purchase::inRandomOrder()->first();
        } while (in_array($purchase->id, self::$usedPurchaseIds));

        self::$usedPurchaseIds[] = $purchase->id;
        return [
            'invoice_code' => strtoupper(fake()->unique()->regexify('[A-Z0-9]{10}')),
            'purchase_id' => $purchase->id,
            'created_at' => $purchase->created_at
        ];
    }
}
