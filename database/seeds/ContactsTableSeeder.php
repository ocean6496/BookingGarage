<?php

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Contact::truncate();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 11 ; $i++) { 
        	Contact::create([
        		'name' => $faker->name,
        		'email' => $faker->email,
        		'content' => $faker->sentence(9, true)
        	]);
        }
    }
}
