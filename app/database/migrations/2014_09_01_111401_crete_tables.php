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
		Schema::create("userroles",function($table){
			$table->increments("id");
			$table->string("userrole");
		});
		Schema::create("procedures",function($table){
			$table->increments("id");
			$table->string("name");
		});
		Schema::create("conditions",function($table){
                        $table->increments("id");
                        $table->string("name");
                });
		Schema::create("languages",function($table){
                        $table->increments("id");
                        $table->string("name");
                });
		Schema::create("educations",function($table){
                        $table->increments("id");
                        $table->string("name");
                        $table->string("type");
                        $table->string("city");
                        $table->string("state");
                        $table->string("year");
                });
		Schema::create("networkplans",function($table){
                        $table->increments("id");
                        $table->string("name");
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
		Schema::dropIfExists("userroles");
		Schema::dropIfExists("procedures");
		Schema::dropIfExists("conditions");
		Schema::dropIfExists("languages");
		Schema::dropIfExists("educations");
		Schema::dropIfExists("networkplans");
	}

}
