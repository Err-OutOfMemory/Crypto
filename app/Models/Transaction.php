<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'order_id', 
        'crypto_id', 
        'amount',
        'type', 
        'price',
        'status', 
        'date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cryptocurrency(): BelongsTo
    {
        return $this->belongsTo(Cryptocurrency::class, 'crypto_id');
    }

    public function fiat(): BelongsTo
    {
        return $this->belongsTo(Fiat::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
