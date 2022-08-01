<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->integer('ClientID')->index('ClientID');
            $table->integer('ProductID')->index('ProductID');
            $table->integer('ReviewID')->primary();
            $table->set('Rating', ['0', '1', '2', '3', '4', '5']);
            $table->text('CustomerReview');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review');
    }
}
