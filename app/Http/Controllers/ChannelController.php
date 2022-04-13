<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\channel;
class ChannelController extends Controller
{
    public function displayChanel()
    {
        
        return view("channels.index");
    }
}
