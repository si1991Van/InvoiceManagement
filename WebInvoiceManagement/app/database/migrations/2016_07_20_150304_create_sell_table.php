<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sells', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 256)->nullable();
			$table->integer('product_id')->nullable();
			$table->integer('customer_id')->nullable();
			$table->string('code', 256)->nullable();
			$table->string('date_sell', 256)->nullable();
			$table->string('number', 256)->nullable();
			$table->string('price', 256)->nullable();
			$table->string('total_money', 256)->nullable();
			$table->softDeletes();
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
		Schema::drop('sells');
	}

}

