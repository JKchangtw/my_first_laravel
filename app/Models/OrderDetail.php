<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $product_id
 * @property integer $qty
 * @property integer $price
 * @property integer $order_id
 * @property string $created_at
 * @property string $updated_at
 */
class OrderDetail extends Model
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
    protected $fillable = ['product_id', 'qty', 'price', 'order_id', 'created_at', 'updated_at'];



    public function order(){
        //一個訂單詳情是屬於某筆訂單的 自己的 對方的
        return $this->belongsTo(Order::class, 'order_id','id');
    }

    public function product(){
        //每個訂單詳情都會連結到一個商品
        //對方的  自己的
        return $this->hasOne(Goods::class, 'id','product_id');
    }
}
