<?php
namespace App\procPipe;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
abstract class filter {
    public function handle($request,Closure $next)
    {
        
        if (!request()->has($this->getClassName())) {
            return $next($request);
        }
        $builder=$next($request);

        return $this->filterData($builder);
    }
    protected abstract function filterData($builder);
    protected function getClassName()
    {
       return Str::snake(class_basename($this));
    }
}