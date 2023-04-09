<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function list(ArticleRepository $articleRepository): Response
    {
        $repo = $articleRepository->findAll();
        $randomMin = 0;

        return $this->render('pages/index.html.twig', [
            'articles' => $repo,
            'randomMin' => $randomMin,
        ]);
    }
}
