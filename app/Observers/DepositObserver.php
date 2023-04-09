<?php

namespace App\Observers;

use App\Models\Deposit;

class DepositObserver
{
    /**
     * Handle the Deposit "created" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function created(Deposit $deposit)
    {

        $deposit->user->increment('account_balance', $deposit->amount);

        $deposit->createTransactions();

        // $deposit->transactions->create([
        //     'transaction_id' => '#12345678',
        //     'status' => false,
        // ]);

        // $deposit->user->update(['account_balance' => $total_balance]);

    }

    /**
     * Handle the Deposit "updated" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function updated(Deposit $deposit)
    {
        //
    }

    /**
     * Handle the Deposit "deleted" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function deleted(Deposit $deposit)
    {
        //
    }

    /**
     * Handle the Deposit "restored" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function restored(Deposit $deposit)
    {
        //
    }

    /**
     * Handle the Deposit "force deleted" event.
     *
     * @param  \App\Models\Deposit  $deposit
     * @return void
     */
    public function forceDeleted(Deposit $deposit)
    {
        //
    }
}
