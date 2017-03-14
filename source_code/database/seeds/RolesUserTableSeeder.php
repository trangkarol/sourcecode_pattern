<?php

use Illuminate\Database\Seeder;

class RolesUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
       	//data pattern
    	$detail_roles = [
    		[
    			'user_id' => 1,
	            'roles_id' => 1,
	        ],
    		[
            	'user_id' => 2,
            	'roles_id' => 1,
            ],
            [
            	'user_id' => 1,
            	'roles_id' => 2
            ]
    	];
    	DB::table('roles_user')->delete();
    	//
        DB::table('roles_user')->insert($detail_roles);
    }
}
