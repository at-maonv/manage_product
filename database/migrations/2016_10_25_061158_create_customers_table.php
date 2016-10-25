<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name',50);
            $table->string('first_name',50);
            $table->string('email')->unique();
            $table->string('password',100);
            $table->string('phone',20);
            $table->string('city',150);
            $table->string('province',150);
            $table->string('country',150);
            $table->text('image_url');
            $table->string('date_of_birth',15);
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
        Schema::drop('customers');
    }
}
