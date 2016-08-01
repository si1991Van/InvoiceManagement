<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('product_code', 256)->nullable();
			$table->string('product_name', 256)->nullable();
			$table->string('type', 256)->nullable();
			$table->string('cost', 256)->nullable();
			$table->string('wholesale_price', 256)->nullable();
			$table->string('retail_price', 256)->nullable();
			$table->string('file', 256)->nullable();
			$table->string('status')->nullable();
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
		Schema::drop('products');
	}

}
