<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $new_train = new Train();
            $new_train->company_name = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time('H:i');
            $new_train->arrival_time = $faker->time('H:i');
            $new_train->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $new_train->car_number = $faker->numberBetween(2, 15);
            $new_train->in_time = $faker->boolean();

            $new_train->save();
        }
    }
}
