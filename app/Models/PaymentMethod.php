<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the deposit for the PaymentMethod
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deposit()
    {
        return $this->hasMany(Deposit::class);
    }

    //table
    protected $table = 'payment_methods';

    //create a morph many realtionship
    public function paymentable()
    {
        return $this->morphTo();
    }

    // a payment method belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
