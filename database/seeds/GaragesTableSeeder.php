<?php

use Illuminate\Database\Seeder;
use App\Models\Garage;
use App\Models\User;

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

        $garages =  User::where('role_id', 2)->get(); 

        foreach ($garages as $garage) {
        	Garage::create([
        		'name' => $faker->name,
                'address' => $faker->address,
        		'phone' => $faker->phoneNumber,
        		'proprietor' => $faker->name,
                'user_id' => $garage->id
        	]);
        }
    }
}
