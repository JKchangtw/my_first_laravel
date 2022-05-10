<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $subtotal
 * @property integer $shipping_fee
 * @property integer $total
 * @property integer $product_qty
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property integer $pay_way
 * @property integer $shopping_way
 * @property string $store_address
 * @property integer $status
 * @property string $ps
 */
class Order extends Model
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
    protected $fillable = ['created_at', 'updated_at', 'subtotal', 'shipping_fee', 'total', 'product_qty', 'name', 'phone', 'email', 'address', 'pay_way', 'shopping_way', 'store_address', 'status', 'ps', 'user_id'];

    public function detail(){
        //對方的 自已的 一個訂單有很多訂單詳情
        return $this->hasMany(OrderDetail::class, 'order_id','id');
    }
    //訂單都屬於某一個使用者
    public function user(){
        //自己的 對方的
        return $this->belongsTO(User::class,'user_id','id');
    }


}
