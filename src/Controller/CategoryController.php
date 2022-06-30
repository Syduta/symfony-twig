<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category",name="category");
     */

    public function category(){
        $category = [
            "title" => "Politique",
            'color' => "red",
            'published' => true,
            'description' => 'Decrypter l\'actualité politique avec le prisme de David Robert'
        ];
        return $this->render('category.html.twig',
            ['article'=>$category]); //article sera le nom de l'entitée category dans le fichier twig
    }
}