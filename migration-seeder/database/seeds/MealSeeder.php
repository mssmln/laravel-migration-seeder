<?php
/*Creare un model in cui definiremo sempre tutte le proprietà come fillable, attraverso la variabile protected
ed una migration dove definiremo tutte le colonne della nostra tabella (che creeremo a piacere).
Dopo creiamo un seeder che popoli la nostra tabella, attraverso l'utilizzo di dati faker, come visto a lezione: https://fakerphp.github.io/formatters/Bonus: Fare anche le rotte e le views a piacere*/

use Illuminate\Database\Seeder;
use App\Meal; // model
use Faker\Generator as Faker; // model del faker
use Carbon\Carbon;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /*public function run() // metodo con seeders
    {
        $meals = config('meals');

        foreach($meals as $meal){
            $newMeal = new Meal(); // il model serve per poter creare istanze
            $newMeal->name = $meal['name'];
            $newMeal->temperature = $meal['temperature'];
            $newMeal->calorie_count = $meal['calorie_count'];
            //$newMeal->cooked_on = Carbon::createFromFormat('d/m/Y', $meal['cooked_on']);

            $newMeal->save();
        }
    }*/

    public function run(Faker $faker) // metodo con fakers
    {
        for($i= 0; $i < 10; $i++){
            $newMeal = new Meal(); 
            $newMeal->name = $faker->name(20);
            $newMeal->temperature = $faker->word();
            $newMeal->calorie_count = $faker->numberBetween(-100,100);
            //$newMeal->cooked_on = Carbon::createFromFormat('d/m/Y', $meal['cooked_on']);

            $newMeal->save();

        }
    }
}
