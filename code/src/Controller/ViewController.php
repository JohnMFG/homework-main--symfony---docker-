<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\Query\Expr\Math;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        $textArr = preg_split('/[\s,.\'";:-]+/', $article->getText());
        $wordCount = 0;
        foreach ($textArr as $value) {
            if(strlen($value) > 3) $wordCount++;
          }
        $minToRead = round($wordCount/200);

        return $this->render('pages/view.html.twig', [
            'article' => $article,
            'textLenght' => $minToRead
        ]);
    }
}
