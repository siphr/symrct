<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
// ...
use App\Entity\Todo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class TodoController extends AbstractController
{
    /**
     * @Route("/todo", name="create_todo")
     */
    public function createTodo(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $todo = new Todo();
        $todo->setDescription('todo'.$todo->getId());

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($todo);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new todo with id '.$todo->getId());
    }
    /*
    public function index()
    {
        return $this->render('todo/index.html.twig', [
            'controller_name' => 'TodoController',
        ]);
    }
     */
}
