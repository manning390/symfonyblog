<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController {

	/**
	 * Homepage Route
	 */
	public function homepage() {
		return new Response('Test first symfony page');
	}
}