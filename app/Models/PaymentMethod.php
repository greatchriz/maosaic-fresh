<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


}
