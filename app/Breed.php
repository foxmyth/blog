<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

/**
* Breed class
*/
class Breed extends Model {	
	protected $timestamp = false;

	public function cats() {
		return $this->hasMany('Blog\Breed');
	}

}