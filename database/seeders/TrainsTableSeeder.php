<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// import faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // ciclo nuova istanza
        for ($i = 0; $i < 3; $i++) {
            // creazione istanza
            $newTrain = new Train();

            // assegnazione valori
            $newTrain->company           = $faker->company();  // nome azienda
            $newTrain->departure_station = $faker->city();  // stazione di partenza
            $newTrain->arrival_station   = $faker->city();  // stazione di arrivo
            $newTrain->departure_time    = $faker->dateTimeBetween('-1 day', '+1 day');  // data di partenza
            $newTrain->arrival_time      = $faker->dateTimeBetween('-1 day', '+1 day');  // data di arrivo
            $newTrain->train_code        = $faker->numberBetween(10000, 99999);  // codice treno
            $newTrain->total_carriages   = $faker->numberBetween(1, 10);  // numero di carrozze
            $newTrain->on_time_or_not    = $faker->numberBetween(0, 1);  // in orario o no
            $newTrain->cancelled_or_not  = $faker->numberBetween(0, 1);  // cancellato o no

            $newTrain->save();
        }
    }
}
