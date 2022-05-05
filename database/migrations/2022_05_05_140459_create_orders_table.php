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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('subtotal');//商品金額小計
            $table->integer('shipping_fee');//運費
            $table->integer('total');//總計
            $table->integer('product_qty');//品項
            $table->string('name');//
            $table->string('phone');//
            $table->string('email');//
            $table->string('address');//地址
            $table->integer('pay_way');//付款方式用數字替代
            //1信用卡 2網路ATM 3超商代碼
            $table->integer('shopping_way');//運送方式
            //1黑貓宅配 2超商店到店
            $table->string('store_address');//取貨超商
            $table->integer('status');//訂單狀態
            //1未付款 2已付款 3已出貨 4已結單 5已取消
            $table->string('ps');//訂單備註 寫東西
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
