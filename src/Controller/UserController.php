<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;

class UserController extends AbstractController
{
    #[Route("/users/{id}", defaults=["id": -1] name: "app_users_get")]
    public function get(EntityManagerInterface $entityManager): JsonResponse
    {
        $response = $this->json();


        // $entityManager = $this->getDoctrine()->getManager();

        $entityManager->getRepository("App:User:class");

        if (id > 0) {
            $response->setStatusCode(Response::HTTP_OK);
        }
        else {
            $response->setStatusCode(Response::HTTP_BAD_REQUESt);
        }

        return $response;
    }
}
