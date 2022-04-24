<?php
namespace App\procPipe;

use Closure;
use Illuminate\Http\Request;
use App\procPipe\filter;

class run extends filter {
    public function filterData($builder)
    {
        return $builder->where($this->getClassName(),request($this->getClassName()));
    }
}