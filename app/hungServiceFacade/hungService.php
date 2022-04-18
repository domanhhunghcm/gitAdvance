<?php
namespace App\hungServiceFacade;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
class hungService 
{
    private $country;
    private $width;
    private $height;
    public function __construct($country,$width,$height)
    {
        $this->country=$country;
        $this->width=$width;
        $this->height=$height;
    }
    public function hello($email,$text)
    {
        Mail::to('domanhhunghcm@gmail.com')->send(new OrderShipped("hung oi thanh cong"));
        dd("run roi kia");
    }
}
