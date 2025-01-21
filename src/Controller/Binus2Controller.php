<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Binus2Controller extends AbstractController
{
    #[Route('/binus2', name: 'app_binus2')]
    public function index(): Response
    {
        return $this->render('binus2/index.html.twig', [
            'controller_name' => 'Binus2Controller',
        ]);
    }

    #[Route('/binus2/cv', name: 'app_cv')]
    public function cv(): Response
    {
        $cvData = [
            "name" => "Aubin Fayolle",
            "formations" => [
                ["date" => "2024", "details" => "Bac général, Lycée Jean Puy, Roanne"],
                ["date" => "2020/2021", "details" => "Brevet des collèges, mention Très Bien, Collège Albert Schweitzer, Riorges"]
            ],
            "experiences" => [
                ["date" => "2023", "details" => "Garde d'enfants"],
                ["date" => "2022", "details" => "Stage en pharmacie Turlin, Riorges (réception de commandes, organisation du stock)"],
                ["date" => "2021", "details" => "Stage aux Tissages de Charlieu (analyse des besoins, métiers)"]
            ],
            "competences" => [
                "Python", "Scratch", "Suite Office", "Windows", "Mac OS", "Android", "iOS"
            ],
            "langues" => [
                "Anglais" => "B1",
                "Espagnol" => "A2"
            ]
        ];
    
        return $this->render('binus2/cv.html.twig', [
            'cv' => $cvData,
        ]);
    }

    #[Route('/binus2/comp', name: 'app_comp')]
public function competences(): Response
{
    return $this->render('binus2/comp.html.twig', [
        'controller_name' => 'Binus2Controller',
    ]);
}

}
