<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello-world", name="hello-world", methods={"GET"})
     * @return Response
     */
    public function hello()
    {
        $bodyResponse = 'Hello World !';
        return new Response($bodyResponse);
    }

    /**
     * @Route("/hello-world/{name}", name="hello-name", methods={"GET"})
     * @param String $name
     * @return Response
     */
    public function helloName($name)
    {
        $bodyResponse = sprintf('Hello %s !', $name);
        return new Response($bodyResponse);
    }

}