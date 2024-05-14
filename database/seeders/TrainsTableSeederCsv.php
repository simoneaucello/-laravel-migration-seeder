<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // apro il file csv e lo salvo in una variabile
        $data_str = fopen(__DIR__ . '/trains.csv', 'r');

        $i = 0;

        while (($row = fgetcsv($data_str)) != false) {

            if ($i > 0) {
                $new_train = new Train();
                $new_train->company_name = $row[0];
                $new_train->departure_station = $row[1];
                $new_train->arrival_station = $row[2];
                $new_train->departure_time = $row[3];
                $new_train->arrival_time = $row[4];
                $new_train->train_code = $row[5];
                $new_train->car_number = $row[6];
                $new_train->in_time = $row[7];

                $new_train->save();
            }

            $i++;
        }

        fclose($data_str);
    }
}
