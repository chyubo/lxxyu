<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create('zh_CN');
        for($i = 0; $i < 40 ; $i++){
        	DB::table('admin') -> insert([
        			'username' => $faker -> username(20),
        			'password' => bcrypt('123456'),
        			'gender'   => rand(1,3),
        			'mobile'   => $faker -> phoneNumber,
        			'email'    => $faker -> email(40),
        			'role_id'  => rand(1,5),
        			'created_at'=> date('Y-m-d H:i:s'),
        			'status'   => rand(1,2)
        		]);
        }
    }
}
