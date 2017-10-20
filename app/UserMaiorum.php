<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMaiorum extends Model {

	protected $table = 'mm_users';

	protected $fillable = [
		'id',
		'name',
		'email',
		'telephone',
		'cellphone',
		'id_login',
		'created_at',
		'updated_at',
		'deleted_at'
	]; 

}
