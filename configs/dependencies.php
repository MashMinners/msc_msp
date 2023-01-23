<?php

return [
    #Factories
    'Application' => \DI\factory('\Engine\Core\ApplicationFactory::create'),
    'PDO' => DI\factory('\Engine\Database\MySQLDbConnector::connect'),
    \League\Route\Router::class => DI\factory('\Engine\Router\RouterFactory::create'),
    #Dependencies
    'ServerRequestInterface' => DI\get(\Laminas\Diactoros\ServerRequest::class),
    'Emitter' => DI\get(\Laminas\HttpHandlerRunner\Emitter\SapiStreamEmitter::class)
];