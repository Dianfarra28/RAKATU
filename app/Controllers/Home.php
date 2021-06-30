<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$uri = $this->request->uri;
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
