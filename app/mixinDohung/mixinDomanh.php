<?php
namespace App\mixinDohung;
class mixinDomanh{
    public function dohung1()
    {
        return function ()
        {
            dd("manhunghcm");
        };
    }
    public function dohung2()
    {
        return function ()
        {
            return "manhunghcm2";
        };
    }
}