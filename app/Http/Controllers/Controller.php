<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
// 以下引入model
use App\Models\Comment;
use App\Models\Order;


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


    // public function login(){
    //     return view('bootstrap.login');
    // }

    public function comment(){
        //以下用DB
        // $comment1 = DB::table('comments')->orderby('id','desc')->get();

        // 以下用model操作
        $comment1 = Comment::orderby('id','desc')->get();
        // dd($comment1);
        return view('comment.comment',compact('comment1'));
    }


    // 以下刪留言和編輯留言step3
    public function edit_comment($id){
        // 先測試有無抓到
        // dd($id);
        // $test = DB::table('comments')->where('id',$id)->first();
        //first從符合條件的其中 抓出第一筆(不會是陣列 直接抓出物件) get會抓出陣列(外面還包一層)
        // 以下用find方法 只能針對主key(id)搜尋 以此情況來說 會比較直接且有效率
        // DB::table('comments')->find();

        // model寫法
        $test = Comment::where('id',$id)->first();

        // 有變數就要compact
        return view('comment.edit',compact('test'));

    }
    public function update_comment($id, Request $request){
    //   方法一 用DB 只能搭配Where
    //   DB::table('comments')->where('id',$id)
    //                        ->update([
    //         'title'=>$request->title,
    //         'name'=>$request->name,
    //         'content'=>$request->content,
    //         'email'=>'',
    //     ]);

        //方法二 用model
        Comment::where('id',$id)
        ->update([
        'title'=>$request->title,
        'name'=>$request->name,
        'content'=>$request->content,
        'email'=>'',
         ]);

        return redirect('/comment');

        // return view('comment.edit',compact('test'));

    }
    public function delete_comment($target){
        // 先測試有無抓到
        // dd($target);
        // DB寫法
        // DB::table('comments')->where('id',$target)->delete();
        // model寫法
        Comment::where('id',$target)->delete();
        return redirect('/comment');
    }
    // 以上


    public function save_comment(Request $request){
        //用DB直接操作
        // DB::table('comments')->insert([
            //'id'=>1000, 會改資料庫id
        //     'title'=>$request->title,
        //     'name'=>$request->name,
        //     'content'=>$request->content,
        //     'email'=>'',
        // ]);


        // 以下用model做(較正統的作法)
        Comment::create([
            // 'id'=>1000, 資料庫不會改1000
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'email'=>'',
        ]);
        //或打包存在陣列裡面
        // $data = [
        //     'title'=>$request->title,
        //     'name'=>$request->name,
        //     'content'=>$request->content,
        //     'email'=>'',
        // ];
        // Comments::create($data);


        return redirect('/comment');

        // 印出送出的全部input
        // dd($request->all());
    }



    public function order(){

        $orders = Order::orderby('id','desc')->get();
        $header='訂單管理頁';
        $slot='';


        return view('order.index',compact('orders','header','slot'));
    }
    public function order_edit($id){


        $editorder = Order::where('id',$id)->first();
        $header='訂單編輯頁';
        $slot='';

        return view('order.edit',compact('editorder','header','slot'));
    }

    public function order_update($id, Request $request){

            Order::where('id',$id)
            ->update([
            'status'=>$request->status,
             ]);

            return redirect('/order');
        }

}


