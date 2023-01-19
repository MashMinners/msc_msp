<?php

return [
    #Factories
    'Application' => \DI\factory('\Engine\Core\ApplicationFactory::create'),
    #Dependencies
    'PDO' => DI\factory('\Engine\Database\MySQLDbConnector::connect')
];