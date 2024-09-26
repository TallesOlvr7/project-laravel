<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BanRecord extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'ban_duration',
        'finish_date',
        'motive'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
