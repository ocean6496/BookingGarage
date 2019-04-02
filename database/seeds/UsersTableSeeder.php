<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        User::truncate();
        
        $faker = Faker\Factory::create();
        $limit = 10;
        $role_id = [1,2,3];
 
        for ($i = 0; $i < $limit; $i++) {
            User::create([
                'fullname' => $faker->name,
                'username' => $faker->username,
                'password' => Hash::make(12345678),         
                'email' => $faker->unique()->safeEmail,
                'role_id' => $faker->randomElement($role_id),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'active' => 0,
            ]);
        }

        // Factory(User::class, 5)->create();
    }
}
