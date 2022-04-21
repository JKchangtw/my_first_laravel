<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // 使用的資料庫表單名稱
    protected $table = 'comments';
    // 資料表的主key 通常是索引角色(不可重複性)
    protected $primaryKey = 'id';

    // model可以使用黑/白名單其中之一 去設定可填寫的欄位

    //整張表格只有name可以被填寫
    protected $fillable = ['title', 'name', 'content', 'email'];
    //除了以下三個 其他都可以被填寫
    // protected $guard = ['created_at', 'updated_at', 'id'];
}
