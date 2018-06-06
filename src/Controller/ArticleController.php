<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController {

	/**
	 * @Route("/")
	 */
	public function homepage() {
		return new Response('Test first symfony page');
	}

	/**
	 * @Route("/news/{slug}")
	 */
	public function show($slug) {
		return new Response("Future page to show $slug");
	}
}