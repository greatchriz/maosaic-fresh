<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Validator;
use App\Models\PaymentMethod;

class DepositController extends Controller
{

    //make a create method that returns deposit create view
    public function create(Request $request)
    {
        $payment_methods = PaymentMethod::all();
        return view('pages/deposits/create', [
        ]);


    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'user_wallet_address' => 'required|string|max:255',
            'transaction_hash' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
        ]);

        $request->user()->deposits()->create($validated);

        return back()->with('success', 'Deposit created successfully!');


    }

    public function createPayment(Deposit $deposit)
    {
        dd($deposit);
        // if ($deposit = 1) {
        //     # code...
        // }
        return view('pages/deposits/payment');
    }

    public function index()
    {
        $deposits = Deposit::paginate(10);
        $deposits_count = Deposit::all()->count();
        return view('pages/deposits/index', [
            'deposits' => $deposits,
            'deposits_count' => $deposits_count,
        ]);
    }








    public function show(PaymentMethod $payment_method)
    {
        dd($payment_method);
        return view('pages/deposits/payment', [
            'payment_method' => $payment_method,
        ]);
    }
}
