<?php namespace XavieR\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('xavier_events_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('city_id')->unsigned()->index();
            $table->integer('place_id')->unsigned()->index();
            $table->string('title');
            $table->timestamp('start_date');
            $table->string('links');
            $table->integer('id_artist')->unsigned()->index();
            $table->boolean('confirmed')->default(false);


        });
    }

    public function down()
    {
        Schema::drop('xavier_events_events');
    }

}
