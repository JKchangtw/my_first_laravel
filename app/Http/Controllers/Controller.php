<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // public function index(){
    //     return view('MSFT_test');
    // }
    public function bmi(){
        return view('BMI_test');
    }
    public function colortest(){
        return view('01_ColorTest');
    }
    public function dice(){
        return view('07_Dice');
    }
}
