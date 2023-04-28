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
        // return all the payment methods where the
        return view('pages/deposits/create');

    }

    public function select (Request $request)
    {
        // get the url parameter (payment_method)
        $payment_method = $request->payment_method;

        // $payment_method = $request->payment_method;

        // $payment_method = $paymentMethod;

        return view('pages/deposits/payment', [
            'payment_method' => $payment_method,
        ]);


    }


    public function store (Request $request, PaymentMethod $paymentMethod)
    {

        dd($paymentMethod);
    }
}
