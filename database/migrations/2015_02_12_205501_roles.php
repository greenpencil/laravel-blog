<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Roles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('name');

			$table->boolean('perm_create_post');
			$table->boolean('perm_edit_post');
			$table->boolean('perm_delete_post');

			$table->boolean('perm_create_category');
			$table->boolean('perm_edit_category');
			$table->boolean('perm_delete_category');

			$table->boolean('perm_create_comment');
			$table->boolean('perm_edit_comment');
			$table->boolean('perm_delete_comment');

			$table->boolean('perm_create_user');
			$table->boolean('perm_set_perms');

			$table->boolean('perm_create_role');
			$table->boolean('perm_edit_role');
			$table->boolean('perm_delete_role');

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
		Schema::drop('roles');
	}

}
