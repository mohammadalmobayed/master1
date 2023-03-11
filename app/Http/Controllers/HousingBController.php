<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousingBController extends Controller
{
    public function index(){
        return view('pages.housing.housingB');
    }
}
