<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;

class BannerController extends Controller
{



    public function banner_index(){
        // 將所有banner資料從資料庫拿出來
        //然後輸出到列表頁上
          $banners = Banner::get();
          $header='Banner管理頁';
          $slot='';
        // return view('banner.index');

        return view('banner.index',compact('banners','header','slot'));
    }



    public function banner_create(){
        //準備新增用的表單給使用者填寫

        $header='Banner新增頁';
        $slot='';
        return view('banner.create',compact('header','slot'));
    }


    public function banner_store(Request $request){
        //實際做新增 將使用者填寫的資料 經過處理(ex:檔案上傳,防呆...)後,新增至資料庫

        // dd($request->all());
        //檔案上傳 以下指令會新增一個banner資料夾在storage/app內
        // Storage::disk('local')->put('banner', $request->banner_img);
        //但想讓別人看到上傳的圖片 就要存到public去 $request->對到的是create頁面HTML的 input 的 name
        $path = Storage::disk('local')->put('public/banner', $request->banner_img);
        // dd($path);//看看路徑
        // 呼叫Model create 前面對到資料庫欄位 =>對到request

        //將路徑中的public置換成storage
        $path = str_replace("public","storage", $path);

        Banner::create([
            'img_path' => '/'.$path,
            'img_opacity' => $request->img_opacity,
            'weight' => $request->weight,

        ]);

        return redirect('/banner');
    }







    public function banner_edit($id, Request $request){
        //根據id找到想編輯的資料 將資料連同編輯用的畫面回傳給使用者
        $banner = Banner::find($id);
        // $which = Banner::where('id',$id)->first();
        // 或find法
        // $which = Banner::find($id);

        // $path = Storage::disk('local')->put('public/banner', $request->banner_img);
        // $path = str_replace("public","storage", $path);

        // dd($which->img_path);

        $header='Banner編輯頁';
        $slot='';

        return view('banner.edit',compact('banner','header','slot')) ;
    }

    public function banner_update(Request $request, $id){
        //根據id找到想修改的資料
        $banner = Banner::find($id);
        //使用者上傳的資料 先經過處理(ex:檔案上傳,防呆...)

        //***這邊以下 確認有無上傳圖片 banner_img有上傳檔案嗎
        if($request->hasfile('banner_img')){
            $path = Storage::disk('local')->put('public/banner', $request->banner_img);
            $path = str_replace("public","storage", $path);//將路徑中的public置換成storage

            //再寫入新的資料之前 先把舊的資料刪掉
            $target = str_replace("/storage","public",$banner->img_path);//將路徑中的storage置換成public
            Storage::disk('local')->delete($target);// 刪掉舊的圖片

            //將新的資料更新到資料庫裏面
            $banner->img_path = '/'.$path;
        }
        //***這邊以上

        $banner->img_opacity = $request->img_opacity;
        $banner->weight = $request->weight;

        $banner->save();//存到資料庫裡

        return redirect('/banner');

    }



    public function banner_delete($id){
        //利用id找到要刪除的資料 並且連同相關檔案一起刪除

        // dd($id);
        $banner = Banner::find($id);

        // 先刪圖片 再刪資料
        $target = str_replace("/storage","public",$banner->img_path);
        //將路徑中的storage置換成public 才能讓大家看到
        Storage::disk('local')->delete($target);// 刪掉舊的圖片

        $banner->delete();
        // 重新導向(送出新的request)到列表頁
        return redirect('/banner');
    }
 }

