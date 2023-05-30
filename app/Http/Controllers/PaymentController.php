<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function paymentMethods()
    {
        return view('pages.payment.payment-methods');
    }
}
