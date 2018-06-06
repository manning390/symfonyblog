<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController {

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
		$title = ucwords(str_replace('-', ' ', $slug));
		$comments = [
			'Test comment 1 Lorem ipsum dolor sit amet.',
			'Test comment 2 Lorem ipsum dolor sit amet.',
			'Test comment 3 Lorem ipsum dolor sit amet.',
		];
		return $this->render('article/show.html.twig', compact('title', 'comments'));
	}
}