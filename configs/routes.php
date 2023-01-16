<?php
$router->lazyMiddleware(\Application\Middleware\MiddlewareOne::class);
$router->get('/', 'Application\BookController::index')->lazyMiddleware(\Application\Middleware\MiddlewareTwo::class);
$router->get('/db', 'Application\Controllers\Controller::getRows');