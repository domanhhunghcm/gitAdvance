<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repository\customerInterface;
class customers extends Controller
{
    private $customerReponsitory;
    public function __construct(customerInterface $customerReponsitory)
    {
        $this->customerReponsitory=$customerReponsitory;
    }
    public function getAll()
    {
        $customers=$this->customerReponsitory->getAllData();
        return $customers;
    }
    public function getById($idCus)
    {
        $customers=$this->customerReponsitory->getByIdRes($idCus);
        return $customers;
    }
    public function updateById($idUpdate)
    {
        $customers=$this->customerReponsitory->updateByIdRes($idUpdate);
        return redirect(to:"/getById/".$idUpdate);
    }
    public function deleteById($id)
    {
        $customers=$this->customerReponsitory->deleteByIdRes($id);
        return redirect()->route("getAll");
    }
    
}
