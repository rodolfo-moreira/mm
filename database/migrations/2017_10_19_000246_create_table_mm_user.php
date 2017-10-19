<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMmUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::create('mm_users', function(Blueprint $table)
		{
		    $table->increments('id');
		    $table->string('name', 150);
		    $table->string('email', 150);
		    $table->string('telephone', 20)->nullable();
		    $table->string('cellphone', 20)->nullable();
		    $table->integer('id_login');
		    $table->timestamps();
		    $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mm_users');
	}

}
