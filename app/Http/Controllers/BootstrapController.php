<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BootstrapController extends Controller
{
    //
    public function bootstrap(){

        $data1 = DB::table('news')->take(3)->get();//抓最舊三筆
        $data2 = DB::table('news')->take(3)->orderby('id','desc')->get();//抓最新三筆
        $data3 = DB::table('news')->inRandomOrder()->take(3)->get();//抓隨機三筆
        // dd($data1, $data2, $data3);
        // dump('測試');
        $dataDefault=DB::table('news')->take(2)->orderby('id','desc')->get();
        return view('bootstrap.bootstrap',compact('data2','data1','data3','dataDefault'));
    }
    // public function login(){
    //     return view('bootstrap.login');
    // }
    public function shop01(){
        return view('bootstrap.shop01');
    }
    public function shop02(){
        return view('bootstrap.shop02');
    }
    public function shop03(){
        return view('bootstrap.shop03');
    }
    public function shop04(){
        return view('bootstrap.shop04');
    }
}
