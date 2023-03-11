<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeanshipController extends Controller
{
    public function index(){
        
        return view('pages.deanship.deanship');
    }
}
