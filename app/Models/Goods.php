<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $table = 'goods';

    protected $keyType = 'integer';

    protected $fillable = ['created_at', 'updated_at', 'goods_name', 'goods_price', 'goods_count', 'goods_intro', 'goods_img'];

}
