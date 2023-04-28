<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'wallet_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // create a morph many relationship

    public function paymentMethod()
    {
        return $this->morphMany(PaymentMethod::class, 'paymentable');
    }

}
