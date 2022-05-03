<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{
    //
    public function account_index(){
        // 將所有user資料從資料庫拿出來
        //然後輸出到列表頁上
          $users = User::get();
          $header='帳號管理頁';
          $slot='';


        return view('account.index',compact('users','header','slot'));
    }



    public function account_create(){
        //準備新增用的表單給使用者填寫

        $header='會員新增頁';
        $slot='';
        return view('account.create',compact('header','slot'));
    }


    public function account_store(Request $request){
        //實際做新增 將使用者填寫的資料 經過處理(ex:檔案上傳,防呆...)後,新增至資料庫

        //lavavel內建的帳號註冊防呆 檢查輸入是否正確 加不加?????????????
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        dd($request);
        //先用傳統方法呼叫一個驗證器去幫忙驗證帳號
         $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validator->fails()){
         return redirect('/account/create')->with('problem','輸入資訊有誤，請重新檢查後再輸入');
        }

        //管理者新增的都是權限1的管理者
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'power'=> 1,

        ]);

        // dd($user);

        return redirect('/account')->with('success','新增會員成功');
    }







    public function account_edit($id, Request $request){
        //根據id找到想編輯的資料 將資料連同編輯用的畫面回傳給使用者
        $user = User::find($id);
        // $which = Banner::where('id',$id)->first();
        // 或find法
        // $which = Banner::find($id);

        // $path = Storage::disk('local')->put('public/banner', $request->banner_img);
        // $path = str_replace("public","storage", $path);

        // dd($which->img_path);

        $header='會員編輯頁';
        $slot='';

        return view('account.edit',compact('user','header','slot')) ;
    }

    public function account_update(Request $request, $id){
        //根據id找到想修改的資料
        $user = User::find($id);
        //使用者上傳的資料 先經過處理(ex:檔案上傳,防呆...)

        //***這邊以下 確認有無上傳圖片 banner_img有上傳檔案嗎
        // if($request->hasfile('banner_img')){
        //     $path = Storage::disk('local')->put('public/banner', $request->banner_img);
        //     $path = str_replace("public","storage", $path);//將路徑中的public置換成storage

        //     //再寫入新的資料之前 先把舊的資料刪掉
        //     $target = str_replace("/storage","public",$banner->img_path);//將路徑中的storage置換成public
        //     Storage::disk('local')->delete($target);// 刪掉舊的圖片

        //     //將新的資料更新到資料庫裏面
        //     $banner->img_path = '/'.$path;
        // }
        //***這邊以上

        $user->name = $request->name;
        // $user->password = $request->password;
        $user->power = $request->power;

            //needsRehash檢查是否已經做過Hash運算，如果沒有才會執行裡面的內容
            //因為如果使用者沒有修改密碼 代表傳到後端的就會是原始已經hash過的密碼(代表使用者沒有修改密碼)
        if(Hash::needsRehash($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();//存到資料庫裡

        return redirect('/account')->with('success','編輯會員成功');

    }



    public function account_delete($id){
        //利用id找到要刪除的資料 並且連同相關檔案一起刪除

        // dd($id);
        $user = User::find($id);

        // 先刪圖片 再刪資料
        // $target = str_replace("/storage","public",$banner->img_path);
        //將路徑中的storage置換成public 才能讓大家看到
        // Storage::disk('local')->delete($target);// 刪掉舊的圖片

        $user->delete();
        // 重新導向(送出新的request)到列表頁
        return redirect('/account')->with('success','會員已刪除');
    }
}
