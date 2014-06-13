<?php namespace XavieR\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateClubsTable extends Migration
{

    public function up()
    {
        Schema::create('xavier_events_clubs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('city_id')->unsigned()->index();
            $table->string('title');
            $table->string('description')->nullable();
            $table->boolean('confirmed')->default(false);

        });
    }

    public function down()
    {
        Schema::drop('xavier_events_clubs');
    }

}
