<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        $posts = [
            [
            'title' => 'Article 1',
            'description' => 'Lorem ipsum',
            'category' => 'animaux',
            'content' => 'lorem up ser darot de typas los del fouerto opaco',
            'slug' => 'article-1'
            ],
            [
            'title' => 'Article 2',
            'description' => 'Lorem ipsum',
            'category' => 'enfant',
            'content' => 'lorem up ser darot de typas los del fouerto opaco',
            'slug' => 'article-2'
            ],
            [
            'title' => 'Article 3',
            'description' => 'Lorem ipsum',
            'category' => 'deco',
            'content' => 'lorem up ser darot de typas los del fouerto opaco',
            'slug' => 'article-3'
            ],
        ];
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/{slug}", name="app_view")
     */
    public function view(String $slug): Response
    {
        $posts = [
            [
            'title' => 'Article 1',
            'description' => 'Lorem ipsum',
            'category' => 'animaux',
            'content' => 'lorem up ser darot de typas los del fouerto opaco',
            'slug' => 'article-1'
            ],
            [
            'title' => 'Article 2',
            'description' => 'Lorem ipsum',
            'category' => 'enfant',
            'content' => 'lorem up ser darot de typas los del fouerto opaco',
            'slug' => 'article-2'
            ],
            [
            'title' => 'Article 3',
            'description' => 'Lorem ipsum',
            'category' => 'deco',
            'content' => 'lorem up ser darot de typas los del fouerto opaco',
            'slug' => 'article-3'
            ],
        ];
        
        return $this->render('home/view.html.twig', [
            'controller_name' => 'HomeController',
            'param' => $slug,
            'post' => $posts
        ]);
    }
}
