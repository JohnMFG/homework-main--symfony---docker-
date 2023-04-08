<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditController extends AbstractController
{

    #[Route('/edit/{id}', name: 'edit_view')]

    public function edit(Article $article, Request $request): Response
    {

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $article = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($article);
                $entityManager->flush();
                

                return $this->redirectToRoute('article_view', ['id' => $article->getId()]);
            } else {
                dump($form->getErrors(true));
            }
        }

        return $this->render('pages/edit.html.twig', [
            'form' => $form->createView(),
            'article' => $article,
        ]);
    }

}