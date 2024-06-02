<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route("/lucky/number")] // This attribute defines the URL route for this action (method)
    public function number(): Response  // The function's name is "number" and it returns a Response object
    {
        // Generate a random number between 0 and 100 (inclusive)
        $number = random_int(0, 100);

        // Create and return an HTML response containing the lucky number
        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }


    #[Route("/hello/{name}", defaults: ["name" => "World"])] // Default name if none is given
    public function greet(?string $name): Response
    {
        $greeting = "Hello " . ($name ?? "World") . "!"; // Use null coalescing operator

        return new Response(
            '<html><body><h1>' . $greeting . '</h1></body></html>'
        );
    }
}
