<?php

use Illuminate\Database\Migrations\Migration;

class NotificationsCreateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('notifications', function($t) {
			$t->create();

			$t->increments('id');
			$t->text('message');
			$t->string('owner_type');
			$t->integer('owner_id');
			$t->integer('user_id');

			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notifications');
	}

}