<?php

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Car::truncate();

        $faker = Faker\Factory::create();

        Car::insert([
        	[
        		'name' => 'BMW',
        		'description' => $faker->sentence(6, true),
        	],
        	[
        		'name' => 'Toyota',
        		'description' => $faker->sentence(6, true),
        	],
        	[
        		'name' => 'Jord',
        		'description' => $faker->sentence(6, true),
        	],
        	[
        		'name' => 'Audi',
        		'description' => $faker->sentence(6, true),
        	],
        	[
        		'name' => 'Mazda',
        		'description' => $faker->sentence(6, true),
        	],
        ]);
    }
}
