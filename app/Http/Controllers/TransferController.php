<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transfer;

class TransferController extends Controller
{
    public function create()
    {
        return view('pages.transfer.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'amount' => 'required|max:255',
        ]);

        $transfer = $request->user()->transfers()->create($validated);

        // $balance = $transfer->user->account_balance - $transfer->amount;


        // $transfer->user->forceFill([
        //     'account_balance' => $balance,
        // ])->save();

        return redirect(route('dashboard'));
    }
}
