<?php
namespace App\Controller;

use DateTime;
use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ProjectController
{

   
    private $twig;

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }


    public function show(
        ServerRequestInterface $request,
        ResponseInterface $response,
        ?array $args
    ): ResponseInterface {

        $startedAt = new \DateTime('2019-03-27');
        $finishedAt = new \DateTime();

        $project = [
            "id" => 100,
            "name" => "super site!!!",
            "startedAt" => $startedAt,
            "finishedAt" => $finishedAt,
            "description" => '<h2>Site avec Slim Framework</h2> 
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem error, quam necessitatibus atque animi qui labore corrupti ducimus, aspernatur, eos nesciunt saepe iste quae modi eius! Porro neque, aperiam eaque.</p>',
            "image" => "site.png",
            "languages" => ["html5", "css3", "php", "sql"]
        ];

            // On retourne une réponse
        // return $response->getBody()->write('<h1>Détail du projet</h1>');
        return $this->twig->render($response, 'projet/show.twig', [
            'project' => $project
        ]);
    }
    public function create(
        ServerRequestInterface $request,
        ResponseInterface $response,
        ?array $args
    ): ResponseInterface {
            // On retourne une réponse
        // return $response->getBody()->write('<h1>Création d\'un projet</h1>');
        return $this->twig->render($response, 'projet/create.twig');
    }
}
