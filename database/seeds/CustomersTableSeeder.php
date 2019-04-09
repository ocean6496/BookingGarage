<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;
use App\Models\Garage;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Customer::truncate();

        $faker = Faker\Factory::create();

        $countGarages = Garage::count(); 

        $customers = User::where('role_id', 3)->get();

        foreach ($customers as $key => $customer) {
        	Customer::create([
        		'fullname' => $faker->name,
        		'address' => $faker->address,
        		'phone' => $faker->phoneNumber,
        		'user_id' => $customer->id,
        		'garage_id' => rand(1, $countGarages),
        	]);
        }
    }
}
