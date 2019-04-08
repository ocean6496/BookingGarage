<?php

use Illuminate\Database\Seeder;
use App\Models\Garage;

class GaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        Garage::truncate();

        $faker = Faker\Factory::create();

        for ($i=0; $i < 5; $i++) { 
        	Garage::create([
        		'address' => $faker->address,
        		'phone' => $faker->phoneNumber,
        		'proprietor' => $faker->name,
        	]);
        }
    }
}
