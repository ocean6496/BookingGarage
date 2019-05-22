<?php

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\Garage;
use App\Models\User;
use App\Models\Car;
use App\Models\Car_model;
use App\Models\Customer;
use App\Models\Service;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Booking::truncate();

        $faker = Faker\Factory::create();

        $garages = Garage::get();
        $customers = User::where('role_id', 3)->pluck('id'); 
        $cars = Car::pluck('id');
        $services = Service::pluck('id');

        foreach ($garages as $key => $garage) {
            for ($i=0; $i < 5 ; $i++) { 
                $car_id = $faker->randomElement($cars);
                $car_model_id = Car_model::where('car_id', $car_id)->pluck('id');
                Booking::insert([
                    'user_id' => $faker->randomElement($customers),
                    'car_id' => $car_id,
                    'car_model_id' => $faker->randomElement($car_model_id),
                    'garage_id' => $garage->id,
                    'date' => $faker->date,
                    'time' => $faker->time,
                    'service_id' => $faker->randomElement($services),
                    'checkout' => rand(0,1),
                ]);
            }
        }
    }
}
