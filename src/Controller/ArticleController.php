<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController {

	/**
	 * @Route("/", name="app_homepage")
	 */
	public function homepage() {
		return $this->render('article/homepage.html.twig');
	}

	/**
	 * @Route("/news/{slug}", name="article_show")
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