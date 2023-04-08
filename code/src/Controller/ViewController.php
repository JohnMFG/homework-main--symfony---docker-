<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        //CIA PRAD
        // $em = $this->getDoctrine()->getManager();
        // $textLenght = $em->getRepository(Article::class)->find($article->getText());
        $textLenght = strlen($article->getText());
        // $article->setTitle('New nameee!');
        // $em->flush();

        return $this->render('pages/view.html.twig', [
            'article' => $article,
            'textLenght' => $textLenght
        ]);
    }
}
