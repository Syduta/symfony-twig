<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StarsController extends AbstractController{

    /**
     * @Route("/stars",name="stars");
     */

    public function stars(){

    $stars =
    [
        1 => [
        'title' => 'Tex',
         'description' => 'mauvaise blague',
        'color' => 'red',
        'published' => true,
        'image' => 'https://resize.programme-television.ladmedia.fr/r/670,670/img/var/premiere/storage/images/tele-7-jours/news-tv/video-les-z-amours-france-2-tex-craque-sa-chemise-devant-les-candidats-4344637/77880010-1-fre-FR/VIDEO-Les-Z-amours-France-2-Tex-craque-sa-chemise-devant-les-candidats.jpg',
        'publishedDate' => new \DateTime('NOW'),
        'id'=>1
        ],
        2 => [
        'title' => 'Cyril Hanouna',
            'description' => 'trop c\'est trop',
        'color' => 'yellow',
        'published' => true,
        'image' => 'https://media.onvoitout.fr/2021/10/cyril-hanouna-tpmp-stresse-tres-inquiet-pour-les-yeux-de-benjamin-castaldi-il-dit-tout-50.jpg',
        'publishedDate' => new \DateTime('NOW'),
         'id'=>2
        ],
        3 => [
        'title' => 'Afida Turner',
            'description' => 'trop c\'est toujours trop',
        'color' => 'pink',
        'published' => true,
        'image' => 'https://s.yimg.com/uu/api/res/1.2/SXrg2uonJIrD9JlemslJWQ--~B/aD01Njg7dz0xMDI0O2FwcGlkPXl0YWNoeW9u/http://media.zenfs.com/fr_FR/News/TeleLoisirs/96851-afida-turner-atteinte-de-deux-tumeurs-elle-sera-bientot-hospitalisee.jpeg',
        'publishedDate' => new \DateTime('NOW'),
        'id'=>3
        ],
        4 => [
        'title' => 'Manuel Valls',
        'description' => 'Eric',
        'color' => 'blue',
        'published' => true,
        'image' => 'https://images.bfmtv.com/vypLwZsN4IyBgQiA4BpWRJgRrpg=/4x3:1252x705/1248x0/images/-80516.jpg',
        'publishedDate' => new \DateTime('NOW'),
         'id'=>4
        ],
        5 => [
        'title' => 'JCVD',
        'description' => 'Eric',
        'color' => 'blue',
        'published' => true,
        'image' => 'https://www.programme.tv/imgre/fit/~1~tel~2021~07~12~6801abcb-554d-4a8b-8667-d05cb7f88734.png/1160x500/crop-from/top/quality/80/focus-point/1783,871/jean-claude-van-damme-devoile-les-causes-de-ses-problemes-de-drogue.jpg',
        'publishedDate' => new \DateTime('NOW'),
        'id'=>5
        ]
    ];
//    dd($stars);
    ?>
    <?php
        return $this->render('stars.html.twig',
            ['articles'=>$stars]);


    }
    /**
     * @Route("/star/{id}",name="star");
     */

    public function star($id){

        $stars =
            [
                1 => [
                    'title' => 'Tex',
                    'description' => 'mauvaise blague',
                    'color' => 'red',
                    'published' => true,
                    'image' => 'https://resize.programme-television.ladmedia.fr/r/670,670/img/var/premiere/storage/images/tele-7-jours/news-tv/video-les-z-amours-france-2-tex-craque-sa-chemise-devant-les-candidats-4344637/77880010-1-fre-FR/VIDEO-Les-Z-amours-France-2-Tex-craque-sa-chemise-devant-les-candidats.jpg',
                    'publishedDate' => new \DateTime('NOW'),
                    'id'=>1
                ],
                2 => [
                    'title' => 'Cyril Hanouna',
                    'description' => 'trop c\'est trop',
                    'color' => 'yellow',
                    'published' => true,
                    'image' => 'https://media.onvoitout.fr/2021/10/cyril-hanouna-tpmp-stresse-tres-inquiet-pour-les-yeux-de-benjamin-castaldi-il-dit-tout-50.jpg',
                    'publishedDate' => new \DateTime('NOW'),
                    'id'=>2
                ],
                3 => [
                    'title' => 'Afida Turner',
                    'description' => 'trop c\'est toujours trop',
                    'color' => 'pink',
                    'published' => true,
                    'image' => 'https://s.yimg.com/uu/api/res/1.2/SXrg2uonJIrD9JlemslJWQ--~B/aD01Njg7dz0xMDI0O2FwcGlkPXl0YWNoeW9u/http://media.zenfs.com/fr_FR/News/TeleLoisirs/96851-afida-turner-atteinte-de-deux-tumeurs-elle-sera-bientot-hospitalisee.jpeg',
                    'publishedDate' => new \DateTime('NOW'),
                    'id'=>3
                ],
                4 => [
                    'title' => 'Manuel Valls',
                    'description' => 'Eric',
                    'color' => 'blue',
                    'published' => true,
                    'image' => 'https://images.bfmtv.com/vypLwZsN4IyBgQiA4BpWRJgRrpg=/4x3:1252x705/1248x0/images/-80516.jpg',
                    'publishedDate' => new \DateTime('NOW'),
                    'id'=>4
                ],
                5 => [
                    'title' => 'JCVD',
                    'description' => 'Eric',
                    'color' => 'blue',
                    'published' => true,
                    'image' => 'https://www.programme.tv/imgre/fit/~1~tel~2021~07~12~6801abcb-554d-4a8b-8667-d05cb7f88734.png/1160x500/crop-from/top/quality/80/focus-point/1783,871/jean-claude-van-damme-devoile-les-causes-de-ses-problemes-de-drogue.jpg',
                    'publishedDate' => new \DateTime('NOW'),
                    'id'=>5
                ]
            ];
        return $this->render('star.html.twig',
            ['articles'=>$stars[$id]]);
    }

}


//{#
//    je veux g??n??rer une url vers la page d'affichage d'une star
//                j'??vite de mettre l'url en dur, sinon l'url ne marchera
//                sur les environements autres que le mien (autres dev, serveur de prod etc)
//                Pour calculer l'url en fonction de l'environnement, j'utilise la
//                fonction path de twig et je lui passe juste le nom de la route.
//Le probl??me de cette route (star) c'est qu'elle n'est pas statique. On est
//                oblig?? de lui passer un id, pour identifier la star ?? afficher.
//                Donc en deuxi??me parametre, on lui passe l'id ?? utiliser dans la route,
//                ici l'id de la star.
//            #}
//            <a href={{ path('star', {'id': star.id }) }}>Voir le d??tail de la star</a>

