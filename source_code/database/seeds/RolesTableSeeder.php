<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//data pattern
    	$roles = [
    		['name_roles' => 'admin'],
    		['name_roles' => 'user']
    	];
    	DB::table('roles')->delete();
    	//
        DB::table('roles')->insert($roles);
    }
}
