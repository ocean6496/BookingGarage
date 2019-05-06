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

        foreach ($garages as $key => $garage) {
            if ($key == 0) {
            	Garage::insert([
            		'name' => $faker->name,
                    'address' => 'Hai Chau - Da Nang',
            		'phone' => $faker->phoneNumber,
            		'proprietor' => $faker->name,
                    'user_id' => $garage->id
            	]);
            }
            if ($key == 1) {
                Garage::insert([
                    'name' => $faker->name,
                    'address' => 'Hoan Kiem - Ha Noi',
                    'phone' => $faker->phoneNumber,
                    'proprietor' => $faker->name,
                    'user_id' => $garage->id
                ]);
            }
            if ($key == 2) {
                Garage::insert([
                    'name' => $faker->name,
                    'address' => 'Quan 10 - Ho Chi Minh',
                    'phone' => $faker->phoneNumber,
                    'proprietor' => $faker->name,
                    'user_id' => $garage->id
                ]);
            }
            if ($key == 3) {
                Garage::insert([
                    'name' => $faker->name,
                    'address' => 'Hai Phong - Hai Phong',
                    'phone' => $faker->phoneNumber,
                    'proprietor' => $faker->name,
                    'user_id' => $garage->id
                ]);
            }
            if ($key == 4) {
                Garage::insert([
                    'name' => $faker->name,
                    'address' => 'Ninh Kieu - Can Tho',
                    'phone' => $faker->phoneNumber,
                    'proprietor' => $faker->name,
                    'user_id' => $garage->id
                ]);
            }
        }
    }
}
