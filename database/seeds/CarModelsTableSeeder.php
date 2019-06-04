<?php

use Illuminate\Database\Seeder;
use App\Models\Car_model;
use App\Models\Car;

class CarModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Car_model::truncate();

        $faker = Faker\Factory::create();

        $cars = Car::get(); 
        
        foreach ($cars as $key => $car) {
            if ($key == 0) {
                Car_model::insert([
                    [
                        'name' => 'X1',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'X3',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => '1 Series',
                        'car_id' => $car->id,
                    ],
                ]);
            }
            if ($key == 1) {
                Car_model::insert([
                    [
                        'name' => 'Vios',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'Camry',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'Corolla',
                        'car_id' => $car->id,
                    ],
                ]);
            }
            if ($key == 2) {
                Car_model::insert([
                    [
                        'name' => 'Morning',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'Cerato',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'Tucson',
                        'car_id' => $car->id,
                    ],
                ]);
            }
            if ($key == 3) {
                Car_model::insert([
                    [
                        'name' => 'A4',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'S1',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'Q5',
                        'car_id' => $car->id,
                    ],
                ]);
            }
            if ($key == 4) {
                Car_model::insert([
                    [
                        'name' => '3',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'CX-5',
                        'car_id' => $car->id,
                    ],
                    [
                        'name' => 'CX-7',
                        'car_id' => $car->id,
                    ],
                ]);
            }
        	// for($i = 1; $i <= 3; $i++) {
        	// 	Car_model::create([
        	// 		'name' => $faker->name,
        	// 		'car_id' => $car->id,
        	// 	]);
        	// }
        }
    }
}
