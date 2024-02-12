<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        //$
        for ($i = 0; $i < 10; $i++) {

            $newEvent = new Location();
            $newEvent->city_name = $faker->city();
            $newEvent->save();
        }
    }
}
