<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_img;

class Goods extends Model
{
    use HasFactory;

    protected $table = 'goods';

    protected $keyType = 'integer';

    protected $fillable = ['created_at', 'updated_at', 'goods_name', 'goods_price', 'goods_count', 'goods_intro', 'goods_img'];


    // 後面要印出資料時 要呼叫的函式 不要跟上面資料庫欄位同名 否則會不知道要取哪個
    //每一筆商品資料
    public function imgs(){
        //hasOne/hasMany 格式(對照的model::class,'被對照的欄位','自已的欄位')
        //因為是hasMany 所以使用的時候會輸出陣列 即使只有一筆資料
        //每一筆商品可以有很多張商品圖片 所以用hasMany
        return  $this->hasMany(Product_img::class,'product_id','id');
    }


    //購物車用的
    public function shoppingCart(){
        //每一筆商品資料可以存在在很多個購物(車)明細內 所以也是hasMany
        return $this->hasMany(ShoppingCart::class,'product_id','id');
    }

}
