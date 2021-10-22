<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('email',50);
            $table->string('phone',50);
            $table->string('gender',50);
            $table->string('dob',50);
            $table->string('jobxp',50);
            $table->string('password',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jusers');
    }
}
