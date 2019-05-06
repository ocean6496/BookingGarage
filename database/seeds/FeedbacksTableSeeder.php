<?php

use Illuminate\Database\Seeder;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Garage;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Feedback::truncate();

        $faker = Faker\Factory::create();

        $start = [1,2,3,4,5];
        $garages = Garage::get();
        $customers = User::where('role_id', 3)->get();

        foreach ($garages as $key1 => $garage) {
        	foreach ($customers as $key2 => $customer) {
        		Feedback::insert([
        			'customer_id' => $customer->id,
        			'message' => $faker->name,
        			'garage_id' => $garage->id,
        			'start_rate' => $faker->randomElement($start),
        		]);
        	}
        }
    }
}
