<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousingAController extends Controller
{
    public function index(){
        return view('pages.housing.housingA');
    }
}
