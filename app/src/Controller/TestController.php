<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="Accueil")
     */
    public function test()
    {
        $bodyResponse = '<h1>body response lol</h1>';
        return new Response($bodyResponse);
    }
}