<?php

namespace Engine\Core;

use Engine\Application;
use League\Route\Router;
use Psr\Container\ContainerInterface;

class ApplicationFactory
{
    public static function create(ContainerInterface $container, Router $router){
        return new Application($container, $router);
    }

}