<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\monitor;
use Illuminate\Support\Facades\DB;
use Illuminate\Pipeline\Pipeline;
class monitorController extends Controller
{
    public function getName(Request $request)
    {
        $names = app(Pipeline::class)
            ->send(monitor::query())
            ->through([
                \App\procPipe\run::class,
                \App\procPipe\name::class,
            ])
            ->thenReturn()->get();
        
        return view("dispMonitor",compact("names"));
    }
}
