<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("parkingoptions",function($table){
			$table->increments("id");
			$table->string("name");
		});
		Schema::create("paymentoptions",function($table){
			$table->increments("id");
			$table->string("name");
		});
		Schema::create("categories",function($table){
				$table->increments("CategoryId");
				$table->string("CategoryName");
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists("parkingoptions");
		Schema::dropIfExists("paymentoptions");
		Schema::dropIfExists("categories");
	}

}
