<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'loans_quantity',
        'year',
        'edition',
        'synopsis',
        'publisher',
        'amount'
    ];

    public function athors():BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }

    public function genres():BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function loans():HasMany
    {
        return $this->hasMany(Loan::class);
    }
}
