<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_code',
        'purchase_id',
        'created_at'
    ];

    public function purchase()
    {
        return $this->hasOne(Purchase::class);
    }
}
