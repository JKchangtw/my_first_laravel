<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;




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


    public function login(){
        return view('bootstrap.login');
    }

    public function comment(){
        //
        $comment1 = DB::table('comments')->orderby('id','desc')->get();

        return view('comment.comment',compact('comment1'));
    }


    // 以下刪留言和編輯留言step3
    public function edit_comment($id){
        // 先測試有無抓到
        // dd($id);
        $test = DB::table('comments')->where('id',$id)->first();//first從符合條件的其中 抓出第一筆(不會是陣列 直接抓出物件) get會抓出陣列(外面還包一層)
        // 以下用find方法 只能針對主key(id)搜尋 以此情況來說 會比較直接且有效率
        // DB::table('comments')->find();

        // 有變數就要compact
        return view('comment.edit',compact('test'));

    }
    public function update_comment($id, Request $request){
      //方法一 用DB 只能搭配WHERE
      DB::table('comments')->where('id',$id)
                           ->update([
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'email'=>'',
        ]);
        //方法二 用model 目前先不用這個方法
        // $test = DB::table('comments')->find($id);//first從符合條件的其中 抓出第一筆(不會是陣列 直接抓出物件) get會抓出陣列(外面還包一層)
        // $test ->title = $request ->title;
        // $test ->name = $request ->name;
        // $test ->content = $request ->content;
        // $test->...

        return redirect('/comment');

        // return view('comment.edit',compact('test'));

    }
    public function delete_comment($target){
        // 先測試有無抓到
        // dd($target);
        DB::table('comments')->where('id',$target)->delete();

        return redirect('/comment');
    }
    // 以上


    public function save_comment(Request $request){

        DB::table('comments')->insert([
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'email'=>'',
        ]);

        return redirect('/comment');

        // 印出送出的全部input
        // dd($request->all());
    }
}
