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
        $bannerlist = DB::table('banners')->get();

        $goodslist = DB::table('goods')->take(8)->orderby('id','desc')->get();
        $goodsintro= DB::table('goods')->inRandomOrder()->take(1)->get();

        $dataDefault=DB::table('news')->take(2)->orderby('id','desc')->get();
        return view('bootstrap.bootstrap',compact('data2','data1','data3','dataDefault', 'goodslist', 'goodsintro', 'bannerlist'));



    }
    // public function login(){
    //     return view('bootstrap.login');
    // }
    //以下是bootstrap的 沒套資料庫的
    // public function shop01(){
    //     return view('bootstrap.shop01');
    // }
    // public function shop02(Request $request){



    //     session([
    //         'amount' => $request->qty,'','']);



    //     return view('shop.shop02');
    // }
    // public function shop03(Request $request){
    //     //先檢查資料有沒有送進來
    //     dd($request->all());

    //     return view('bootstrap.shop03');
    // }
    // public function shop04(){
    //     return view('bootstrap.shop04');
    // }
}
