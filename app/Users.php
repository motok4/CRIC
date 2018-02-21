<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Model implements Authenticatable
{
	use AuthenticableTrait;
	protected $table = 'usuarios';
	protected $fillable = ['nome','email','senha'];
	protected $hidden = [
		'senha'
	];
}