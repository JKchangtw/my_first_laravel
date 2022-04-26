<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $img_path
 * @property integer $product_id
 * @property string $created_at
 * @property string $updated_at
 */
class Product_img extends Model
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
    protected $fillable = ['img_path', 'product_id', 'created_at', 'updated_at'];

    public function product(){
        //一對多 關連到另外一個class        ,被關聯的資料,自己的資料
        // return $this->hasOne(Goods::class,'id','product_id');

        //或以下較正統寫法
        //belongsTo /belongsToMany格式 ,自己的資料,被關聯的資料
        $this->belongsTo(Goods::class,'product_id','id');

    }




}






