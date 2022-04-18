<?php
namespace App\hungServiceFacade;

class hungProvider
{
    public static function __callStatic($name, $arguments)
    {
        dd(app()["App\Providers\hungProvider"]->$name(...$arguments));   
    }
}
