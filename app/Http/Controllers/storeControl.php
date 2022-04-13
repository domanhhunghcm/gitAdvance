<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGateway;
use App\Billing\payMentImplement;
use App\Caculate\plusContract;
class storeControl extends Controller
{
    public function store(payMentImplement $paymentGate,plusContract $plusContract)
    {
        $plusContract->sendDiscount(3300);
        // $paymentGate=new PaymentGateway();
        return $paymentGate->charge(5000);
    }
}
