<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\UserMaiorum as UserMaiorum;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		UserMaiorum::create([
			'name' => 'Rodolfo Moreira',
			'email' => 'rodolformoreira@gmail.com',
			'telephone' => '11 2773-6650',
			'cellphone' => '11 95578-4295',
			'id_login' => 2
			//'password' => 'xbJQAB26z61LBc2AxwbqXA=='
		]);
	}

}
