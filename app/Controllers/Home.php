<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$this->cachePage(38);
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	// public function commands()
	// {
	// 	// command( command: 'cache:clear');
	// 	command( command: 'migrate:create create_user_table');
	// 	die('cache has been cleared.');
	// }

	function showme($page = 'home')
	{
		echo 'This page is: ' . $page;
	}
	//--------------------------------------------------------------------

}