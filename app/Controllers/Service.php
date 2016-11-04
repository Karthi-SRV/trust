<?php
/**
* santhohs for codepack 1.0
*/
namespace App\Controllers;

use App\Core\Controller;

use View;

class Service extends Controller
{
	
	/**
	fetch function will all the forms and sub function
	*/
	public function fetch()
	{
		# code...
		return View::make('Welcome/Service')
            ->shares('title', __('Service'));
	}
}
?>