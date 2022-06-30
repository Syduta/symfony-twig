<?php

namespace App\Controller;//"chemin" pour récup nos classes

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;//héritage
use Symfony\Component\HttpFoundation\Response;//pour que ça marche lol
use Symfony\Component\Routing\Annotation\Route;//pour rediriger url

class AccueilController extends AbstractController {
    /**
     * @Route("/",name="accueil");
     */
    public function accueil(){
        $name = 'thibault';
        return $this->render('learn.html.twig',//on peut retourner this grâce à l'héritage
        ['name'=>$name]);//on place la variable à l'index name du tableau
    }
}