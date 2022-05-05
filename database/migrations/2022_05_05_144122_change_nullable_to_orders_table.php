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
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->integer('subtotal')->nullable()->change();//商品金額小計
            $table->integer('shipping_fee')->nullable()->change();//運費
            $table->integer('total')->nullable()->change();//總計
            $table->integer('product_qty')->nullable()->change();//品項
            $table->string('name')->nullable()->change();//
            $table->string('phone')->nullable()->change();//
            $table->string('email')->nullable()->change();//
            $table->string('address')->nullable()->change();//地址
            $table->integer('pay_way')->nullable()->change();//付款方式用數字替代
            //1信用卡 2網路ATM 3超商代碼
            $table->integer('shopping_way')->nullable()->change();//運送方式
            //1黑貓宅配 2超商店到店
            $table->string('store_address')->nullable()->change();//取貨超商
            $table->integer('status')->nullable()->change();//訂單狀態
            //1未付款 2已付款 3已出貨 4已結單 5已取消
            $table->string('ps')->nullable()->change();//訂單備註 寫東西
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
