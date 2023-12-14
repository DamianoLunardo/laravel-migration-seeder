<?php

namespace Database\Seeders;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker  $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $newTrain = new Trains();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->data_di_partenza = $faker->dateTimeBetween('now', '+10 days');
            $newTrain->data_di_arrivo = $faker->dateTimeBetween('+10 days', '+11 days');
            $newTrain->numero_carrozze = $faker->numberBetween(1, 10);
            $newTrain->in_orario = $faker->randomElement([false, true]);
            $newTrain->cancellato = $faker->randomElement([false, true]);


            $newTrain->save();
        }
    }
}
