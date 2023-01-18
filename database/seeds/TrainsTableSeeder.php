<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $Train = new Train();
            $Train ->company = $faker->words(rand(2, 5), true);
            $Train ->departure_station = $faker->words(rand(2, 5), true);
            $Train ->station_of_arrival = $faker->words(rand(2, 5), true);
            $Train ->departure_time = $faker->date();
            $Train ->arrival_time = $faker->date();
            $Train ->train_code =rand(0000, 9999);
            $Train ->number_of_coaches = rand(1, 15);
            $Train ->in_time = [true, false][rand(0,1)];
            $Train ->deleted = [true, false][rand(0,1)];
            $Train->save();
        }
    }
}
