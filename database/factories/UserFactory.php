<?php

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        // 'username' => $faker->name,
        // 'email' => $faker->unique()->safeEmail,
        // 'email_verified_at' => now(),
        // 'fullname' => $faker->name,
        // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        // 'address' => $faker->address,
        // 'phone' => $faker->phone,
        // 'active' => 0,
        // 'role_id' => 1, 
        // 'remember_token' => Str::random(10),

        'fullname' => $faker->name,
        'username' => $faker->username,
        'password' => Hash::make(12345678),         
        'email' => $faker->unique()->safeEmail,
        'role_id' => 2,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'active' => 0,
    ];
});
