<?php

namespace Engine;

use Engine\Router\IRouter;
use League\Route\Route;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;

class Application
{
    public function __construct(private ContainerInterface $container, private IRouter $router)
    {
        require 'configs/routes.php';
    }

    private function get(string $path, $handler) : Route
    {
        return $this->router->get( $path, $handler);
    }

    private function post(string $path, $handler) : Route
    {
        return $this->router->post( $path, $handler);
    }

    private function put(string $path, $handler) : Route
    {
        return $this->router->put( $path, $handler);
    }

    private function delete(string $path, $handler) : Route
    {
        return $this->router->delete( $path, $handler);
    }

    private function patch(string $path, $handler) : Route
    {
        return $this->router->patch( $path, $handler);
    }

    private function head(string $path, $handler) : Route
    {
        return $this->router->head( $path, $handler);
    }

    private function options(string $path, $handler) : Route
    {
        return $this->router->options( $path, $handler);
    }

    public function run(ServerRequestInterface $request){
        $response = $this->router->dispatch($request);
        $emitter = $this->container->get('Emitter');
        $emitter->emit($response);
    }

}