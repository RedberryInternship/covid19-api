<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCovidData;

class Covid19Controller extends Controller
{
	public function create(PostCovidData $request)
	{
		return response('', 201);
	}
}
