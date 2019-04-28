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
        	for($i = 1; $i <= 3; $i++) {
        		Car_model::create([
        			'name' => $faker->name,
        			'car_id' => $car->id,
        		]);
        	}
        }
    }
}
