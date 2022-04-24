<?php
namespace App\procPipe;

use Closure;
use Illuminate\Http\Request;
use App\procPipe\filter;
class name extends filter {
    public function filterData($builder)
    {
        return $builder->orderBy($this->getClassName(),request($this->getClassName()));
    }
}