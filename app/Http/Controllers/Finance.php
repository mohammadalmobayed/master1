<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Finance extends Controller
{
    public function index(){
        
        return view('pages.finance.finance');
    }
}
