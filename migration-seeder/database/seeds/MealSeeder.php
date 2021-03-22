<?php
/*Creare un model in cui definiremo sempre tutte le proprietà come fillable, attraverso la variabile protected
ed una migration dove definiremo tutte le colonne della nostra tabella (che creeremo a piacere).
Dopo creiamo un seeder che popoli la nostra tabella, attraverso l'utilizzo di dati faker, come visto a lezione: https://fakerphp.github.io/formatters/Bonus: Fare anche le rotte e le views a piacere*/

use Illuminate\Database\Seeder;
use App\Meal; // model
use Carbon\Carbon;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meals = [
            [
                'name' => 'gnocchi fritti',
                'temperature' => 'caldi',
                'calorie_count' => 120,
                //'cooked_on' => '02-03-2021'
            ],
            [
                'name' => 'carbonara',
                'temperature' => 'caldi',
                'calorie_count' => 130,
                //'cooked_on' => '03-03-2021'
            ],
            [
                'name' => 'pasta al forno',
                'temperature' => 'caldi',
                'calorie_count' => 200,
                //'cooked_on' => '04-03-2021'
            ]
        ];

        foreach($meals as $meal){
            $newMeal = new Meal(); // il model serve per poter creare istanze
            $newMeal->name = $meal['name'];
            $newMeal->temperature = $meal['temperature'];
            $newMeal->calorie_count = $meal['calorie_count'];
            //$newMeal->cooked_on = Carbon::createFromFormat('d/m/Y', $meal['cooked_on']);

            $newMeal->save();
        }
    }
}
