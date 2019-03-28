<?php
use App\Controller\AboutController;
use App\Controller\ContactController;
use App\Controller\ProjectController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

// Création d'un route / Page d'accueil
$app->get('/', function (ServerRequestInterface $request, ResponseInterface $response, ?array $args) {
            // On retourne une réponse
        // return $response->getBody()->write('<h1>Bonjour</h1>');
        return $this->view->render($response, 'home.twig');
})->setName("homepage");
    
    
// ////////////////////////////////////////////////////////////
// ////                 Contact               ////
$app->get('/contact', ContactController::class . ':contact')->setName('app_contact');

// ////////////////////////////////////////////////////////////
// ////                 About               ////
$app->get('/about', AboutController::class . ':about')->setName('app_about');

//  Groupe des routes du projet ///////
$app->group('/projet', function () {
    // Création d'une page détail des projets
    // Nouveauté: On ajoute une variable dans l'URL avec les accolades
    $this->get("/{slug}", ProjectController::class . ":show")->setName("app_project_show");
    $this->get("/creation", ProjectController::class . ":create")->setName("app_project_create");
});
