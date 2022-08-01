<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign(['product_id'], 'order_details_ibfk_2')->references(['ProductID'])->on('product');
            $table->foreign(['order_id'], 'order_details_ibfk_1')->references(['order_id'])->on('ordertable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->dropForeign('order_details_ibfk_2');
            $table->dropForeign('order_details_ibfk_1');
        });
    }
}
