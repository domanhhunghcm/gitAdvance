<?php 
namespace App\repository;
use App\models\user;
use App\models\customers as dohung;

interface customerInterface{
    public function getAllData();
    public function getByIdRes($idCus);
    public function updateByIdRes($idUpdate);
    public function deleteByIdRes($id);
}