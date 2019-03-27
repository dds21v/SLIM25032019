<?php
use Generic\Database\Connection;
use Generic\Renderer\TwigRenderer;

// Configuration global de la prod
return  [
            'settings' => [
                'displayErrorDetails' => true,
                "database_name" => "bdd_slimproject",
                "database_user" => "root",
                "database_pass" => "",
            ]
        ];


return [
    "rout-dir" => dirname(__DIR__),
    "database_name" => "mysql:host=localhost;dbname=bdd_slimproject",
    "database_user" => "root",
    "database_pass" => "",
    TwigRenderer::class => function($container) {
        return new TwigRenderer(dirname(__DIR__) . '/templates');
    },
    Connection::class =>function($container) {
        return new Connection(
            $container->get("database_name"),
            $container->get("database_user"),
            $container->get("database_pass")
        );
    },
];


