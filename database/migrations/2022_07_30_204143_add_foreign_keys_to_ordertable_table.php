<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrdertableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ordertable', function (Blueprint $table) {
            $table->foreign(['clientID'], 'ordertable_ibfk_1')->references(['ClientID'])->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordertable', function (Blueprint $table) {
            $table->dropForeign('ordertable_ibfk_1');
        });
    }
}
