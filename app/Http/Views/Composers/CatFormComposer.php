<?php

namespace Blog\Http\Views\Composers;

use Blog\Breed;
use Illuminate\View\View;

/**
* Cat Form Composer
*/
class CatFormComposer
{
	protected $breeds;
	
	public function __construct(Breed $breeds)
	{
		$this->breeds = $breeds;
	}

	public function compose(View $view) {
		$view->with('breeds', $this->breeds->pluck('name'));
	}
}