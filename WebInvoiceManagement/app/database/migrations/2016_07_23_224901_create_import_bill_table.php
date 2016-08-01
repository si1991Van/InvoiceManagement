<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportBillTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('import_bills', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('name_id')->nullable();
			$table->string('code', 256)->nullable();
			$table->string('number', 256)->nullable();
			$table->string('price', 256)->nullable();
			$table->string('date_import', 256)->nullable();
			$table->string('into_money', 256)->nullable();
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
		Schema::drop('import_bills');
	}

}
