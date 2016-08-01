<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
					'email'=>'lmhung@abc-group.vn',
					'password'=>Hash::make('123456'),
					'username' => 'lmhung',
					'phone' => '123456789',
					'avatar' => 'a1.jpg',
					'status'=>'1',
					// 'role_id'=>'1',//
		]);
		User::create([
					'email'=>'trantunghn196@gmail.com',
					'password'=>Hash::make('123456'),
					'username' => 'trantung',
					'phone' => '123456789',
					'avatar' => 'a1.jpg',
					'status'=>'1',
					// 'role_id'=>'2',
					// 'salary_id'=>'1',
			]);
	}
}
