<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class Car
{
	public function Go()
	{
		return new Response
		(
			'<html><body>Hello World!</body></html>'
		);
	}

}
