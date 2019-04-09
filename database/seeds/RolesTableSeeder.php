<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Schema::disableForeignKeyConstraints();
        Role::truncate();

        Role::insert([
        	[
        		'name' => 'admin',
        		'description' => 'managment full system'
        	],
        	[
        		'name' => 'garage',
        		'description' => 'garage use system'
        	],
            [
                'name' => 'user',
                'description' => 'people use system'
            ],
        ]);
    }
}
