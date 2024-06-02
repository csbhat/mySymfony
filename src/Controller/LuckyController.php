<?php
// src/Controller/LuckyController.php

namespace App\Controller;  // Define the namespace for this controller class

// Import necessary classes from Symfony components
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController // Extend the base controller class
{
    #[Route("/lucky/number")] // Define the route for the 'number' action
    public function number(): Response  // Action method that returns a Response object
    {
        $number = random_int(0, 100); // Generate a random number between 0 and 100

        // Render the 'lucky/number.html.twig' template, passing the 'number' variable
        return $this->render('lucky/number.html.twig', [
            'number' => $number, 
        ]);
    }

    #[Route("/hello/{name}", defaults: ["name" => "World"])] // Route for the 'greet' action with default 'name'
    public function greet(?string $name): Response // Action method, accepts optional 'name' parameter
    {
        // Create a greeting message using the provided name or the default "World"
        $greeting = "Hello " . ($name ?? "World") . "!";  

        // Render the 'greet/greeting.html.twig' template, passing the 'greeting' variable
        return $this->render('greet/greeting.html.twig', [
            'greeting' => $greeting, 
        ]);
    }
}
