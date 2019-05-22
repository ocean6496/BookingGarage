<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Service::truncate();

        $faker = Faker\Factory::create();

        Service::insert([
        	[
        		'name' => 'tyres',
        		'description' => $faker->sentence(9, true),
        		'price' => 34.32
        	],
        	[
        		'name' => 'exhaust',
        		'description' => $faker->sentence(9, true),
        		'price' => 56.89
        	],
			[
        		'name' => 'clutches',
        		'description' => $faker->sentence(9, true),
        		'price' => 54.6
        	],
        	[
        		'name' => 'batteries',
        		'description' => $faker->sentence(9, true),
        		'price' => 29.83
        	],
        ]);
    }
}
