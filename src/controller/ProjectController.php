<?php 
namespace App\Controller;

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


	public function show(ServerRequestInterface $request, ResponseInterface $response,?array $args)
    {
            // On retourne une réponse
        // return $response->getBody()->write('<h1>Détail du projet</h1>');
        return $this->twig->render($response, 'projet/show.twig');
    }
    public function create(ServerRequestInterface $request, ResponseInterface $response,?array $args)
    {
            // On retourne une réponse
        return $response->getBody()->write('<h1>Création d\'un projet</h1>');
    }
}



 ?>