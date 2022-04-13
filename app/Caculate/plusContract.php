<?php 
namespace App\Caculate;
use App\Billing\PaymentGateway;
use App\Billing\payMentImplement;

class plusContract {
    private $paymentGateway;
    public function __construct(payMentImplement $paymentGateway)
    {
        $this->paymentGateway=$paymentGateway;
    }
    public function sendDiscount($valueDiscount)
    {
        return $this->paymentGateway->setDis($valueDiscount);
    }
}