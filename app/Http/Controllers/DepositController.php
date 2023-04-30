<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Validator;
use App\Models\PaymentMethod;
use App\Mail\DepositMail;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{


    public function index(Request $request)
    {
        $user = $request->user();

        if ($user->admin) {
            $deposits = Deposit::paginate(10);
            $all_deposits_count = Deposit::all()->count();
            // get the count of all the deposits where the confirmed column is false
            $pending_deposits_count = Deposit::where('confirmed', false)->count();
            // get the count of all the deposits where the confirmed column is true
            $confirmed_deposits_count = Deposit::where('confirmed', true)->count();
            return view('pages/deposits/index', [
                'deposits' => $deposits,
                'all_deposits_count' => $all_deposits_count,
                'pending_deposits_count' => $pending_deposits_count,
                'confirmed_deposits_count' => $confirmed_deposits_count,
            ]);
        }

        $deposits = $user->deposits()->paginate(10);
        $deposits_count = $user->deposits()->count();
        // get the count of the user deposits where the confirmed column is false
        $pending_deposits_count = $user->deposits()->where('confirmed', false)->count();
        // get the count of the user deposits where the confirmed column is true
        $confirmed_deposits_count = $user->deposits()->where('confirmed', true)->count();
        return view('pages/deposits/index', [
            'deposits' => $deposits,
            'deposits_count' => $deposits_count,
            'pending_deposits_count' => $pending_deposits_count,
            'confirmed_deposits_count' => $confirmed_deposits_count,
        ]);
    }

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
            'amount' => 'required|max:255',
        ]);

        $deposit = $request->user()->deposits()->create($validated);

        Mail::to($request->user())->queue(new DepositMail($deposit));

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









    public function show(PaymentMethod $payment_method)
    {
        dd($payment_method);
        return view('pages/deposits/payment', [
            'payment_method' => $payment_method,
        ]);
    }
}
