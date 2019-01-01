<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", methods={"GET","HEAD"}, name="accueil")
     */
    public function getAccueil()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/apropos/{subject}", methods={"GET","HEAD"}, name="about")
     */
    public function getAPropos($subject)
    {
        return $this->render('apropos.html.twig', [
            'subject' => $subject
        ]);
    }
}
