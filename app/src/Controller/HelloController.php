<?php


namespace App\Controller;

use App\Service\MailLogger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Profiler\Profiler;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello-world", name="hello-world", methods={"GET"})
     * @param MailLogger $mailLogger
     * @return Response
     */
    public function hello(MailLogger $mailLogger) : Response
    {
        $bodyResponse = 'Hello World !';
        return new Response($mailLogger->sendMail());
    }

    /**
     * @Route("/hello-world/{name}", name="hello-name", methods={"GET"})
     * @param String $name
     * @param MailLogger $maiLogger
     */
    public function helloName($name, MailLogger $maiLogger)
    {
        $token = bin2hex(random_bytes(32));
        $name = sprintf('Hello %s ! email %s', $name, $maiLogger->sendMail());
        return $this->render('hello.html.twig', ['name' => $token]);
    }

}