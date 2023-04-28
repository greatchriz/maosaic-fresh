<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'card_number' => 'required|string|max:255',
            'expiry_date' => 'required|string|max:255',
            'cvc' => 'required|string|max:255',
            'pin' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        $request->user()->cards()->create($validated);

        return redirect(route('deposit.create'));


    }
}
