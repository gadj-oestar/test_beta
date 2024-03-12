<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/list', name:'list_article')]
    public function list(): Response
    {
        return new Response('<h1>Liste des articles</h1>');
    }
}
