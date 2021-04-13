<?php

namespace App\Controller;

use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(InertiaInterface $inertia)
    {
//        $words = ['sky', 'cloud', 'wood', 'rock', 'forest',
//            'mountain', 'breeze'];

//        return $this->render('home/index.html.twig', [
//            'words' => $words
//        ]);
        return $inertia->render('App', ['prop' => 'propValue'], ['title' => 'Page Title']);
    }
}