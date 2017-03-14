<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    //data pattern
		$users = [
			[ 
				'name' => 'Nguyen Van A',
	            'email' =>'nguyenvana@gmail.com',
	            'password' => bcrypt('123456'),
	        ],
			[ 
				'name' => 'Nguyen Van B',
	            'email' =>'nguyenvanB@gmail.com',
	            'password' => bcrypt('123456'),
	        ],
	        [ 
				'name' => 'Nguyen Van C',
	            'email' =>'nguyenvanc@gmail.com',
	            'password' => bcrypt('123456'),
	        ],
		];
		DB::table('users')->delete();
		//
	    DB::table('users')->insert($users);
	}
}
