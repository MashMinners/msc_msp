<?php

declare(strict_types=1);

namespace Engine\Router;

use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;
use Psr\Container\ContainerInterface;

class RouterFactory
{
    public static function create(ContainerInterface $container){
        $strategy = (new ApplicationStrategy())->setContainer($container);
        $router = (new Router())->setStrategy($strategy);
        return $router;
    }

}