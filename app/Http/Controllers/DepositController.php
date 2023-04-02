<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'amount' => 'required|string|max:255',
        ]);


        $request->user()->deposits()->create([
            'amount' => $request->amount,
            'card_id' => $request->card_id,
        ]);

        return redirect(route('dashboard'));


    }
}
