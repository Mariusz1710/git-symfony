<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class Car
{
	public function Go()
	{
		return new Response
		(
			'<html><body>Hello France!</body></html>'
		);
	}

	public function Brake()
	{
		return "Ola";
	}


}
