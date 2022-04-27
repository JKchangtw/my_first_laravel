<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Goods;
use App\Models\Product_img;
use App\Http\Controller\FilesController;

class GoodsController extends Controller
{
    //
    public function goods_index(){
        // 將所有Goods Model內的資料拿出來
        //然後輸出到列表頁上
          $goods = Goods::get();

        // return view('goods.index');

        return view('goods.index',compact('goods'));
    }



    public function goods_create(){
        //準備新增用的表單給使用者填寫
        return view('goods.create');
    }


    public function goods_store(Request $request){
        //實際做新增 將使用者填寫的資料 經過處理(ex:檔案上傳,防呆...)後,新增至資料庫

        // dd($request->all());
        //檔案上傳 以下指令會新增一個goods資料夾在storage/app內
        // Storage::disk('local')->put('goods', $request->goods_img);
        //但想讓別人看到上傳的圖片 就要存到public去 $request->對到的是create頁面HTML的 input 的 name
        $path = Storage::disk('local')->put('public/goods', $request->goods_img);
        // dd($path);//看看路徑
        // 呼叫Model create 前面對到資料庫欄位 =>對到request

        //將路徑中的public置換成storage
        //主要圖片上傳
        $path = str_replace("public","storage", $path);

        $product = goods::create([
            'goods_img' => '/'.$path,
            'goods_name' => $request->goods_name,
            'goods_price' => $request->goods_price,
            'goods_count' => $request->goods_count,
            'goods_intro' => $request->goods_intro,

        ]);
        //次要圖片 多張上傳
        if($request->hasfile('second_img')){
            foreach($request->second_img as $index=>$element){
                $path = Storage::disk('local')->put('public/goods', $element);
                $path = str_replace("public","storage", $path);

               //建
                Product_img::create([
                'img_path'=> '/'.$path ,
                'product_id'=> $product->id,
                ]);

            };
        }

        return redirect('/goods');
    }







    public function goods_edit($id, Request $request){
        //根據id找到想編輯的資料 將資料連同編輯用的畫面回傳給使用者
        $goods = goods::find($id);
        // $which = goods::where('id',$id)->first();
        // 或find法
        // $which = goods::find($id);

        // $path = Storage::disk('local')->put('public/goods', $request->goods_img);
        // $path = str_replace("public","storage", $path);

        // dd($which->img_path);
        return view('goods.edit',compact('goods')) ;
    }

    public function goods_update(Request $request, $id){
        //根據id找到想修改的資料
        $goods = goods::find($id);
        //使用者上傳的資料 先經過處理(ex:檔案上傳,防呆...)

        //***這邊以下 確認有無上傳圖片 goods_img有上傳檔案嗎
        if($request->hasfile('goods_img')){
            $path = Storage::disk('local')->put('public/goods', $request->goods_img);
            $path = str_replace("public","storage", $path);//將路徑中的public置換成storage

            //再寫入新的資料之前 先把舊的資料刪掉
            $target = str_replace("/storage","public",$goods->goods_img);//將路徑中的storage置換成public
            Storage::disk('local')->delete($target);// 刪掉舊的圖片

            //將新的資料更新到資料庫裏面
            $goods->goods_img = '/'.$path;
        }
        //***這邊以上

        //次要圖片處理
        if($request->hasfile('second_img')){
            foreach($request->second_img as $index=>$element){
                $path = Storage::disk('local')->put('public/goods', $element);
                $path = str_replace("public","storage", $path);

                Product_img::create([
                'img_path'=> '/'.$path ,
                'product_id'=> $goods->id,
                ]);

            };
         }



        $goods->goods_name = $request->goods_name;
        $goods->goods_price = $request->goods_price;
        $goods->goods_count = $request->goods_count;
        $goods->goods_intro = $request->goods_intro;

        $goods->save();//存到資料庫裡

        return redirect('/goods');

    }



    public function goods_delete($id){
        //利用id找到要刪除的資料 並且連同相關檔案一起刪除
        // dd($id);
        $goods = goods::find($id);

        //整組次要圖片刪除 操作如下
        //找出所有 要被刪掉的商品的次要圖片 在Product_img裡面
        //找出product_id 和Goods裡面主要圖片的id(傳進來的) 一樣的
        $imgs = Product_img::where('product_id' , $id)->get();
        //先get出來 然後因為可能不只一筆次要圖片 所以利用foreach
        foreach($imgs as $key=>$value){
            $target = str_replace("storage","public",$value->img_path);
            Storage::disk('local')->delete($target);//刪圖片
            //刪資料
            $value->delete();
        };

        // 先刪圖片 再刪資料
        $target = str_replace("storage","public",$goods->goods_img);
        //將路徑中的storage置換成public 才能讓大家看到
        Storage::disk('local')->delete($target);// 刪掉舊的圖片

        $goods->delete();
        // 重新導向(送出新的request)到列表頁
        return redirect('/goods');
    }

    //從form表單傳出的 傳到路由 再傳入$img_id?
    public function delete_img($img_id){
        //藉由id去找到要刪除的次要圖片 model::
        $img = Product_img::find($img_id);

        $target = str_replace("storage","public",$img->img_path);
        // dd($target);
        Storage::disk('local')->delete($target);//刪圖片

        //資料刪除之前先把商品id取出來 頁面redirect會用到
        $product_id = $img->product_id;
        $img->delete();//把資料刪除

        return redirect('/goods/edit/'.$product_id);
    }
}
