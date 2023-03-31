<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class Car
{
	public function Go()
	{
		return new Response
		(
			'<html><body>I go 50 km/h</body></html>'
		);
	}

}
