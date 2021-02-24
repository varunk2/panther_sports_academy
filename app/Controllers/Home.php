<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index($page = "")
	{
		return view('index', ['page' => $page]);
	}
}
