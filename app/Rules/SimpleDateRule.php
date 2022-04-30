<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SimpleDateRule implements Rule
{
	public function passes($attribute, $value)
	{
		return preg_match('/..\/..\/../', $value);
	}

	public function message()
	{
		return 'Date filed should be formatted respectively: dd/mm/yy';
	}
}
