<?php
namespace App\Controller;

use DateTime;
use Slim\Views\Twig;
use App\Repository\ProjectRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ProjectController
{

   
    private $twig;

    private $projectRepository;

    public function __construct(Twig $twig, ProjectRepository $projectRepository)
    {
        $this->twig = $twig;
        $this->projectRepository = $projectRepository;
    }

    public function show(
        ServerRequestInterface $request,
        ResponseInterface $response,
        ?array $args
    ): ResponseInterface {
        // Récupération du projet
        $project = $this->projectRepository->findBySlug($arg['slug']);

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
