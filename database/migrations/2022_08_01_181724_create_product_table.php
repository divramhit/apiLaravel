<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('ProductID', true);
            $table->integer('category_id')->index('category_id');
            $table->text('Prod_Brand');
            $table->longText('Prod_Desc');
            $table->string('imgpath');
            $table->integer('ListPrice');
            $table->tinyInteger('UnitInStock');
            $table->integer('DELETED_FLAG')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
