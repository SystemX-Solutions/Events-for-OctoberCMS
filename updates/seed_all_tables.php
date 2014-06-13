<?php namespace RainLab\User\Updates;

use October\Rain\Database\Updates\Seeder;
use XavieR\Events\Models\City;
use XavieR\Events\Models\Clubs;

class SeedAllTables extends Seeder
{

    public function run()
    {
        City::insert([
            ['confirmed' => true, 'title' => 'Санкт-Петербург'],
        ]);

        $spb= City::whereTitle('Санкт-Петербург')->first();
        $spb->clubs()->createMany([
            ['confirmed' => true, 'title' => 'Космонавт'],
            ['confirmed' => true, 'title' => 'Зал Ожидания'],
            ['confirmed' => true, 'title' => 'А2'],
            ['confirmed' => true, 'title' => 'Аврора'],
            ['confirmed' => true, 'title' => 'Jagger'],

        ]);

    }

}
