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
			$table->integer('location');
			$table->unsignedInteger('post_id');
			$table->foreign('post_id')->references('id')->on('posts');
			$table->string('image');
			$table->boolean('visible');
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
		Schema::drop('featured');
	}

}
