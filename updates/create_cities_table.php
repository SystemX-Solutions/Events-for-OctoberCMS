<?php namespace XavieR\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCitiesTable extends Migration
{

    public function up()
    {
        Schema::create('xavier_events_cities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->boolean('confirmed')->default(0);

        });
    }

    public function down()
    {
        Schema::drop('xavier_events_cities');
    }

}
