<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //$
        for ($i = 0; $i < 10; $i++) {

            $newEvent = new Event();
            $newEvent->name = $faker->sentence(3);
            $newEvent->description = $faker->sentence(20);


            $newEvent->date = $faker->date();
            $newEvent->save();
        }
    }
}
