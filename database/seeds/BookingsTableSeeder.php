<?php

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\Garage;
use App\Models\User;
use App\Models\Car;
use App\Models\Car_model;
use App\Models\Customer;

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
    }
}
