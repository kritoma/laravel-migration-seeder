<?php

use App\train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $company= ['freccia rossa', 'trenitalia', 'regionale'];

        for($i = 0; $i < 10; $i++) {
            $newTrain = new train();
            $newTrain->azienda = $company[rand(0, (count($company) - 1))];
            $newTrain->stazione_di_partenza = $faker->streetAddress();
            $newTrain->stazione_di_arrivo = $faker->streetAddress();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = rand(1000, 9999);
            $newTrain->numero_carrozze = rand(1,10);
            $newTrain->data = $faker->dateTimeInInterval('-3 days', '+5 days');

            $newTrain->save();
        }
    }
}
