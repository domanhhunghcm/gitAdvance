<?php
namespace App\Billing;


interface payMentImplement{
    public function setDis($val);
    public function charge($amount);
}