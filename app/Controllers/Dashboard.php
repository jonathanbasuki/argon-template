<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard'
		];

		return view('admin/dashboard', ['data' => $data]);
	}
}
