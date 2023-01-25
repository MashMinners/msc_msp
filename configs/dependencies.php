<?php

return [
    #Factories
    'Application' => \DI\factory('\Engine\Core\ApplicationFactory::create'),
    \Engine\Database\IConnector::class => DI\get('\Engine\Database\MySQLDbConnector'),
    \Engine\Router\IRouter::class => DI\factory('\Engine\Router\RouterFactory::create'),
    #Dependencies
    'Emitter' => DI\get(\Laminas\HttpHandlerRunner\Emitter\SapiStreamEmitter::class)
];