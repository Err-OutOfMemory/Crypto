<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fiat extends Model
{
    use HasFactory;

    protected $fillable = [
        'fiat_name', 
        'symbol'
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}