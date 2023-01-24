<?php

return [
    #Factories
    'Application' => \DI\factory('\Engine\Core\ApplicationFactory::create'),
    PDO::class => DI\factory('\Engine\Database\MySQLDbConnector::connect'),
    \Engine\Router\IRouter::class => DI\factory('\Engine\Router\RouterFactory::create'),
    #Dependencies
    'Emitter' => DI\get(\Laminas\HttpHandlerRunner\Emitter\SapiStreamEmitter::class)
];