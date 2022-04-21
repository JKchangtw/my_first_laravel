<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $img_path
 * @property float $img_opacity
 * @property integer $weight
 */
class Banner extends Model
{
    //使用哪一個資料表單
    protected $table ='banners';
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'img_path', 'img_opacity', 'weight'];
}
