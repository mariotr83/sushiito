<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeSliderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('home_slider', function($table){
            $table->increments('id');
            $table->string('image', 100);
            $table->string('title', 100);
            $table->string('sub_title', 100);
            $table->string('link');
            $table->string('link_title');
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
		//
	}

}
