<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'devolution_date',
        'due_date',
        'renewals',
        'stats'
    ];

    public function book():BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

}
