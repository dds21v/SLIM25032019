<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

// Autoloader
require_once dirname(__DIR__) .  '/vendor/autoload.php';

// Création de l'application
$app = new App();


// Création d'un route
$app->get('/', function (
    ServerRequestInterface $request,
    ResponseInterface $response,
    ?array $args
) {
        // On retourne une réponse
    return $response->getBody()->write('<h1>Bonjour</h1>');
}) ->setName("homepage");


$app->group('/projet', function() {
    // Création d'une page détail des projets
    // Nouveauté: On ajoute une variable dans l'URL avec les accolades
    $this->get("/{id:\d+}", function (ServerRequestInterface $request, ResponseInterface $response,?array $args)
    {
            // On retourne une réponse
        return $response->getBody()->write('<h1>Détail du projet</h1>');
    }) ->setName("app_project_show");

    $this->get("/creation", function (ServerRequestInterface $request, ResponseInterface $response,?array $args)
    {
            // On retourne une réponse
        return $response->getBody()->write('<h1>Création d\'un projet</h1>');
    }) ->setName("app_project_create");

});




// création et renvoi de la réponse au navigateur
$app->run();
