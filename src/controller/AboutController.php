<?php 
namespace App\Controller;

use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AboutController
{

	private $twig;

	public function __construct(Twig $twig)
	{
		$this->twig = $twig;
	}


	public function about(ServerRequestInterface $request, ResponseInterface $response,?array $args){
		return $this->twig->render($response, 'about.twig');
	}
}


?>






