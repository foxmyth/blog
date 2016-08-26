<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

/**
*  Cat's Class
*/
class Cat extends Model
{
	protected $fillable = [
		'name', 
		'date_of_birth', 
		'breed_id'
	];

	public function breed() {
		return $this->belongsTo('Blog\Breed');
	}
}