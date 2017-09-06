<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEbayAccountsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ebay_accounts', function(Blueprint $table) {
            $table->increments('ebay_account_id');
            $table->unsignedInteger('user_id')->index();

            // Adding more table related fields here...
            

            $table->string('email', 150)->unique()->nullable();
            $table->string('password', 190)->nullable();
            $table->tinyInteger('status')->default(0);
            
            $table->unsignedInteger('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->ipAddress('created_ip')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->ipAddress('updated_ip')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ebay_accounts');
	}

}
