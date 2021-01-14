<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTampilan extends Controller
{
    public function home(){
        return view('index.index');
    }
}
