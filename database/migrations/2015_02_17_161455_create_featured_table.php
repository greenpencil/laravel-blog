<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('featured', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id', true);
			$table->string('title');
			$table->string('image');
			$table->string('short_desc');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('featured');
	}

}
