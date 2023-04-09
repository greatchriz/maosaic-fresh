<?php

namespace App\Observers;

use App\Models\Transfer;

class TransferObserver
{
    /**
     * Handle the Transfer "created" event.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return void
     */
    public function created(Transfer $transfer)
    {

        $balance = $transfer->user->account_balance - $transfer->amount;

        $transfer->user->forceFill([
            'account_balance' => $balance,
        ])->save();

        $transfer->createTransactions();


        // $user->account_balance = $user->account_balance - $transfer->amount;

        // $user->save();

    }

    /**
     * Handle the Transfer "updated" event.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return void
     */
    public function updated(Transfer $transfer)
    {
        //
    }

    /**
     * Handle the Transfer "deleted" event.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return void
     */
    public function deleted(Transfer $transfer)
    {
        //
    }

    /**
     * Handle the Transfer "restored" event.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return void
     */
    public function restored(Transfer $transfer)
    {
        //
    }

    /**
     * Handle the Transfer "force deleted" event.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return void
     */
    public function forceDeleted(Transfer $transfer)
    {
        //
    }
}
