<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

/**
* class for News And Event Table
*/
class NewsEvent extends Model {
	protected $table = 'news_events';
	// protected $dateFormat = 'F d, Y';

	protected $fillable = [
		'title',
		'start_time',
		'end_time',
		'contents'
	];
	protected $dates = [
		'start_time',
		'end_time',
		'created_at',
		'updated_at'
	];

	public function listOrderByStartTimeDesc()
	{
		return $this->orderBy('start_time', 'desc')->paginate(10);
	}

}