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

        $validated = $request->validate([
            'amount' => 'required|string|max:255',
            'card_id' => 'required|string|max:255',
        ]);

        $request->user()->deposits()->create($validated);

        return redirect(route('dashboard'));


    }
}
