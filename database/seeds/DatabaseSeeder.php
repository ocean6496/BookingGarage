<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class);

        // seed user
        $this->call(UsersTableSeeder::class);
        $this->call(GaragesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);

        // seed car 
        $this->call(CarsTableSeeder::class);
        $this->call(CarModelsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
