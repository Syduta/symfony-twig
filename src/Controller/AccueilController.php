<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController{
    /**
     * @Route("/",name="accueil");
     */
    public function accueil(){
        return new Response("Bonjour sans twig :p");
    }
}