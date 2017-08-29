<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Textnow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textnow', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50)->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email', 150)->unique()->nullable();
            $table->string('password', 190)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
