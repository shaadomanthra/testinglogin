<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    
    public function buttons(Request $r){
        return view('testing.buttons');
    }
}
