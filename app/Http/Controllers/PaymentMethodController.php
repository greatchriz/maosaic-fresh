<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
    public function create ()
    {

        $payment_methods = PaymentMethod::all();
        return view('pages/deposits/create', [
            'payment_methods' => $payment_methods,
        ]);

    }

    public function select (PaymentMethod $paymentMethod)
    {
        $payment_method = $paymentMethod;

        return view('pages/deposits/payment', [
            'payment_method' => $payment_method,
        ]);


    }

    public function store (Request $request, PaymentMethod $paymentMethod)
    {
        $paymentMethod->name = $request->name;
        $paymentMethod->image = $request->image;
        $paymentMethod->save();

        return redirect()->route('paymentMethod.create');
    }
}
