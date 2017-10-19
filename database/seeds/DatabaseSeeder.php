<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name' => 'Rodolfo Moreira',
			'email' => 'rodolformoreira@gmail.com',
			'password' => Hash::make('123456')
			//'password' => 'xbJQAB26z61LBc2AxwbqXA=='
		]);
	}

}
