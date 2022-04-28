<?php
namespace App\repository;
use App\repository\customerInterface;
use App\models\user;
use App\models\customers as dohung;
class customerReponsitory implements customerInterface{
    public function getAllData()
    {
        $customers=dohung::where("active",1)
        ->with('user')
        ->get()
        ->map->formatData();
        return $customers;
    }
    public function getByIdRes($idCus)
    {
        $customers=dohung::where("id",$idCus)->with('user')
        ->get()
        ->map->formatData();
        return $customers;
    }
    public function updateByIdRes($idUpdate)
    {
        $customers=dohung::where("id",$idUpdate)->update(request()->only("name"));
        return $customers;
    }
    public function deleteByIdRes($id)
    {
        $customers=dohung::where("id",$id)->delete();
        return $customers;
    }
}