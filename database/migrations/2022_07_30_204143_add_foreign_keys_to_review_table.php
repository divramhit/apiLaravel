<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review', function (Blueprint $table) {
            $table->foreign(['ProductID'], 'review_ibfk_2')->references(['ProductID'])->on('product');
            $table->foreign(['ClientID'], 'review_ibfk_1')->references(['ClientID'])->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review', function (Blueprint $table) {
            $table->dropForeign('review_ibfk_2');
            $table->dropForeign('review_ibfk_1');
        });
    }
}
