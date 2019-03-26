<?php /*
// Container
use App\classes\Calculator;
use App\classes\Maths;
use App\Controller\ProjectController;

$container = $app->getContainer();

$container[Maths::class] = function () {
return new Maths();
};
$container[Calculator::class] = function ($container) {
return new Calculator($container->get(Maths::class));
};
$container[ProjectController::class] = function ($container) {
return new ProjectController($container->get(Calculator::class));
};