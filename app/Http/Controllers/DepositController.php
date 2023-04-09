<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{

    public function index()
    {
        $deposits = Deposit::paginate(10);
        $deposits_count = Deposit::all()->count();
        return view('deposits/index', [
            'deposits' => $deposits,
            'deposits_count' => $deposits_count,
        ]);
    }

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
