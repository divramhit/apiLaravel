<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdertableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordertable', function (Blueprint $table) {
            $table->integer('order_id', true);
            $table->integer('clientID')->index('clientID');
            $table->date('order_date')->useCurrent();
            $table->integer('order_status');
            $table->string('pay_method', 50);
            $table->integer('pay_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordertable');
    }
}
