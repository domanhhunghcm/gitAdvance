<?php
namespace App\Billing;
use Illuminate\Support\Str;
use App\Billing\payMentImplement;
class PaymentGateway implements payMentImplement
{
    private $currentcy;
    private $disCount;
    public function __construct($currentcy) {
        $this->currentcy=$currentcy;
    }
    public function setDis($val)
    {
        $this->disCount=$val;
    }
    public function charge($amount) {
        return [
            "amount"=>$amount,
            "randomString"=>Str::random(),
            "currentcy"=>$this->currentcy,
            "disCount"=>$this->disCount,

        ];
    }
}