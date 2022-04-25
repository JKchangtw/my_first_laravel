<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('goods_name')->comment('商品名稱');
            $table->integer('goods_price')->comment('商品售價');
            $table->integer('goods_count')->comment('商品數量');
            $table->string('goods_intro')->comment('商品介紹');
            $table->string('goods_img')->comment('商品圖片');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
};
