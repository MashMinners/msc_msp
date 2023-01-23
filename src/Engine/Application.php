<?php

namespace Engine;

use Engine\Router\IRouter;
use League\Route\Router;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;

class Application
{
    public function __construct(private ContainerInterface $container, private Router $router)
    {
        require 'configs/routes.php';
    }

    public function run(ServerRequestInterface $request){
        $response = $this->router->dispatch($request);
        $emitter = $this->container->get('Emitter');
        $emitter->emit($response);
    }

}