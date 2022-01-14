<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Bibliot;
use App\Form\BibliotType;
use Symfony\Component\HttpFoundation\Request;

class TstController extends AbstractController
{
    /**
     * @Route("/tst", name="tst")
     */

    public function addlivres(Request $request)

    {
        $book = new Bibliot();
        $form = $this->createForm(BibliotType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //dump($form);


            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();
            return new Response("Le livre et l'auteur a bien etait  enregistrer.");
        }
        return $this->render('tst/addlivres.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
