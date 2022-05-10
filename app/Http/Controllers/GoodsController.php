<?php

namespace App\Http\Controllers;

//有宣告Request $request就要use
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Goods;
use App\Models\Product_img;
use App\Http\Controller\FilesController;
use Illuminate\Support\Facades\DB;

use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\OrderDetail;


class GoodsController extends Controller
{
    //
    public function goods_index(){
        // 將所有Goods Model內的資料拿出來
        //然後輸出到列表頁上
            $goods = Goods::get();
            $header='商品列表頁';
            $slot='';
        // return view('goods.index');

        return view('goods.index',compact('goods','header','slot'));
    }



    public function goods_create(){
        //準備新增用的表單給使用者填寫
            $header='商品新增頁';
            $slot='';
        return view('goods.create',compact('header','slot'));
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
            $header='商品編輯頁';
            $slot='';
        return view('goods.edit',compact('goods','header','slot')) ;
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


    //以下是有套資料的
    public function shop_page(){

            $goods = Goods::get();
            $header='商品列表頁';
            $slot='';
            $goodslist = DB::table('goods')->take(10)->orderby('id','desc')->get();


        return view('shop.shoppage',compact('goods','goodslist', 'header','slot'));
    }
    public function shop01(){
        //先抓登入的使用者 路由先設定middleware(必須先登入才能瀏覽)
        // $user = Auth::user()->id;
        //或Auth內建方法
        $user = Auth::id();
        //user_id是否=上面抓出來的 get全部的
        $shopping =  ShoppingCart::where('user_id','=',$user)->get();
        //$shopping抓出來是陣列 ->model裡面的function 再->關聯的東西
        //dump但不die
        // dump($shopping[0]->product->goods_name);
        // dump($shopping[1]->product->goods_name);
        // dump($shopping[2]->product->goods_name);
        // dump($shopping[3]->product->goods_name);
        //用FOR迴圈
        // for($i=o; $i <count($shopping); $i++){
        //     $item = $shopping[$i]->product;
        //     dump($item->goods_name);
        //     dump($item->goods_count);
        //     dump($item->goods_price);
        // };
        //用foreach 比較精簡的for迴圈
        // foreach($shopping as $i=>$item){
        //     dump($item->product->goods_name);
        //     // dump($item->product->product_id);
        //     dump($item->product->goods_price);
        //     dump($item->product->goods_img);
        // }
        // dd();
        $subtotal = 0;
        foreach($shopping as $value){
            $subtotal +-$value->qty * $value->product->goods_price;
        }
        return view('shop.shop01',compact('shopping'));
    }
    public function shop02(Request $request){

        //先dd測試從shop01表單送過來的資料
        // dd($request->all());
        //
        // $qty=$request->qty;



        //session裡面 變數分別是 變數名稱,要儲存的資料1,要儲存的資料2,...
        session([
            'amount'=>$request->qty,
        ]);

        //不使用session的方法：直接將更新的數量寫入資料庫
        $user = Auth::id();
        $shopping =  ShoppingCart::where('user_id','=',$user)->get();
        //事先將新的數量更新至資料表
        foreach($shopping as $key=>$item){
            $item->qty = $request->qty[$key];
            // 寫進去後記得還要儲存
            $item->save();
        }

        return view('shop.shop02',compact('shopping'));
    }
    public function shop03(Request $request){


        $user = Auth::id();
        $shopping =  ShoppingCart::where('user_id','=',$user)->get();
        // dd($request->all());
        //要送到下個步驟04 所以要把session複製過來
        session([
            'pay'=>$request->howtopay,
            'deliver'=>$request->howtodev,
        ]);
        $deliver=$request->howtodev;
        return view('shop.shop03',compact('shopping','deliver'));
    }
    public function shop04(Request $request){

        // $user = Auth::id();
        // $shopping = ShoppingCart::where('user_id','=',$user)->get();


        // dump(session()->all());
        // dd($request->all());
        //為了計算單價 將購物車根據使用者的id抓出來
        $merch = ShoppingCart::where('user_id',Auth::id())->get();
        //利用foreach將 將價格和數量乘在一起
        //要算session內的數量 以免在shop01時改數量了卻沒有算到
        //$key想成i $goods陣列裡面的每一個元素
        // foreach($merch as $key=>$goods){
        //     // dump($goods->product);
        //     $subtotal += $goods->product->goods_price
        //     *
        //     session()->get('amount')[$key];
        // };//如果購物車數量有在第一步驟就更新置資料庫 就不用session
        // dd($subtotal);
        //以下是不用session的方法
        $subtotal = 0;
        foreach($merch as $value){
            $subtotal += $value->qty * $value->product->goods_price;
        }
        //判斷付款方式 下面要決定運費
        if(session()->get('deliver')=='1'){
            $fee = 150;
        }else{
            $fee= 60;
        };
        //如果要做滿額免運
        // if($subtotal>=3000){
        //     $fee= 0;
        // };

        //model 建資料進資料庫?
        $order = Order::create([
            'subtotal'=> $subtotal,
            'shipping_fee'=> $fee,
            'total'=> $subtotal + $fee,
            'product_qty'=> count(session()->get('amount')),
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            //把字串串起來再存進去
            // 'address'=> $request->code.$request->city.$request->address,
            //從session抓
            'pay_way'=> session()->get('pay'),
            'shopping_way'=>session()->get('deliver'),
            // 'store_address'=> '',
            'status'=> 1,//訂單剛建出來 肯定是未付款->1
            // 'ps'=>'' ,ps不須存資料
            'user_id'=> Auth::id(),
            //address跟store_address尚未存
        ]);
        //決定運送方式 後面填地址要對應更改
        if($order->shopping_way==1){
            $order -> address = $request->code.$request->city.$request->address;
        }else{
            $order -> store_address = $request->code.$request->city.$request->address;;
        }
        //任何資料的改動 都需要再save()儲存
        $order->save();
        //雖然訂單的主資料內容已經找齊且存好
        //但尚未將購買明細prepare好 商品!
        // dd($order);
        //要再建一個表 訂單詳情表
        foreach($merch as $key=>$value){
            OrderDetail::create([
                'product_id'=>$value->product->id,
                'qty'=>$value->qty,
                'price'=>$value->product->goods_price,
                'order_id'=>$order->id,
            ]);
        };
        //訂單建立成功後刪除購物車內容(清空購物車)
        ShoppingCart::where('user_id',Auth::id())->delete();
        return redirect('/show_order/ '.$order->id,);
        //避免按F5重新整理會重複下到訂單 所以用redirect
        //然後以下寫一個專門展示訂單頁面用的function
    }
    public function show_order($id){
        $order=Order::find($id);

        // $merch = ShoppingCart::where('user_id',Auth::id())->get();
        // $subtotal = 0;
        // foreach($merch as $value){
        //     $subtotal += $value->qty * $value->product->goods_price;
        // }
        return view('shop.shop04',compact('order'));
    }












    public function goodinfo($id, Request $request){
        //根據id找到想編輯的資料 將資料連同編輯用的畫面回傳給使用者
        $goods = goods::find($id);
        // $which = goods::where('id',$id)->first();
        // 或find法
        // $which = goods::find($id);

            $header='商品編輯頁';
            $slot='';
        return view('shop.info',compact('goods','header','slot')) ;
    }

    //for購物車
    public function add_cart(Request $request){

        $product = Goods::find($request->product_id);

        // dd($product);

        if($request->add_qty > $product->goods_count){
            $result = [
                'result' =>'error',
                'message'=>'欲購買數量超過庫存，請聯絡客服人員',
            ];
            return $result;
        }elseif($request->add_qty < 1){
            $result=[
                'result' => 'error',
                'message' =>'購買數量異常，請重新確認',
            ];
            return $result;
        }
        //如果沒登入
        if(!Auth::check()){
            $result=[
                'result' => 'error',
                'message' =>'尚未登入,請先登入',
            ];
            return $result;
        }

            ShoppingCart::create([
                'product_id'=>$request->product_id,
                'user_id' => Auth::user()->id,
                'qty' => $request->add_qty,
            ]);

            $result=[
                'result'=>'success',
                // 'message'=>'新增成功'
            ];
            return $result;

    }
}
