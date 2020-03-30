<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GuildController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('guild/home.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('guild/about.html.twig', [
            'controller_name' => 'GuildController',
        ]);
    }

    /**
     * @Route("/progress", name="raid")
     */
    public function raid(){
        return $this->render('guild/progress.html.twig');
    }

    /**
     * @Route("/recruitment", name="recruitment")
     */
    public function recruitment(){
        return $this->render('guild/recruitment.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(){
        return $this->render('guild/contact.html.twig');
    }

    /**
     * @Route("/roster", name="roster")
     */
    public function roster(){
        return $this->render('guild/roster.html.twig');
    }
}
