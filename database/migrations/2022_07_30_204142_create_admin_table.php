<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->string('AdminID', 15)->primary();
            $table->text('fname');
            $table->text('lname');
            $table->set('sex', ['M', 'F']);
            $table->date('dob');
            $table->text('email');
            $table->string('street', 50);
            $table->string('city', 50);
            $table->integer('postcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
