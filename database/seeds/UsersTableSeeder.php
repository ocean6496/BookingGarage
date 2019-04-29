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
        $role_id = [2,3];
 
        User::create([
                'username' => 'admin@gmail.com',
                'password' => Hash::make(123456),         
                'email' => $faker->unique()->safeEmail,
                'role_id' => 1,
                'active' => 0,
            ]);

        for ($i = 0; $i < 5; $i++) {
            User::create([
                'username' => $faker->username,
                'password' => Hash::make(123456),         
                'email' => $faker->unique()->safeEmail,
                // 'role_id' => $faker->randomElement($role_id),
                'role_id' => 2,
                'active' => 0,
            ]);
        }

        for ($i = 0; $i < $limit; $i++) {
            User::create([
                'username' => $faker->username,
                'password' => Hash::make(123456),         
                'email' => $faker->unique()->safeEmail,
                'role_id' => 3,
                'active' => 0,
            ]);
        }

        // Factory(User::class, 5)->create();
    }
}
