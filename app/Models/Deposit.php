<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Transaction;


class Deposit extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the Deposit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createTransactions()
    {
        $this->transactions()->create([
            'transaction_id' => '#12345678',
            'status' => false,
        ]);
    }

    public function transactions()
    {
        return $this->morphMany(Transaction::class, 'transactionable');
    }

    // create an accessor for the amount
    // public function getAmountAttribute($value)
    // {
    //     return '$' .number_format($value, 2);
    // }

    // create an accessor for the created_at
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }

    // create an accessor for the confirmed attribute
    public function getConfirmedAttribute($value)
    {
        return $value ? 'Confirmed' : 'Pending';
    }
}
