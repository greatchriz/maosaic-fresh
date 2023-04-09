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
}
