<?php

declare(strict_types=1);

namespace Application\Middleware;

use Engine\Application;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class MiddlewareTwo implements MiddlewareInterface
{
    public function __construct(private Application $app){

    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {
        $text = $this->app->text();
        $request = $request->withAttribute('FirstParam', 1);
        $response = $handler->handle($request);
        $response->getBody()->write($text);
        return  $response;
    }

}