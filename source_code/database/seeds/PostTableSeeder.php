<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data pattern
    	$posts = [
    		[
    			'title' => 'Tin tuc thoi su',
    			'body'  => 'Noi dung tin tuc thoi su',
    			'user_id'=>1
    		],
    		[
    			'title' => 'Tin tuc quoc te',
    			'body'  => 'Noi dung tin tuc quoc te',
    			'user_id'=>2
    		]
    	];
    	DB::table('posts')->delete();
    	//
        DB::table('posts')->insert($posts);
    }
}
