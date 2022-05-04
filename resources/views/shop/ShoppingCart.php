<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Goods;
use App\Models\User;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $product_id
 * @property integer $user_id
 * @property integer $qty
 */
class ShoppingCart extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'product_id', 'user_id', 'qty'];

    //以下為關聯

    //對商品關聯
    //主詞:每一筆使用者想採買的商品
    public function product(){
        //一定是店裡販賣的某一件商品
        return $this->hasOne(Goods::class,'id','product_id');

    }

    //對使用者關聯

    public function user(){ //自己是user_id 對到對方(商品)的id
        //每一筆想被採買的商品 一定都是屬於某個使用者
        return $this->belongsTo(User::class,'user_id','id');
    }

}



