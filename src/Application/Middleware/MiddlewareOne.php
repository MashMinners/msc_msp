<?php

declare(strict_types=1);

namespace Application\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class MiddlewareOne implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {
        $request = $request->withAttribute('FirstParam', 1);
        $response = $handler->handle($request);
        $response->getBody()->write('Middleware One <br>');
        return  $response;
    }

}