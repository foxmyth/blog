<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

/**
* class for members table
*/
class Member extends Model {
	
	protected $table = 'members';
	protected $fillable = [
		'alias',
		'priv_level',
		'is_deleted'
	];
	
}