<?php
//$router->lazyMiddleware(\Application\Middleware\MiddlewareOne::class);
//$router->get('/', 'Application\BookController::index')->lazyMiddleware(\Application\Middleware\MiddlewareTwo::class);
$router->get('/', 'Application\Controllers\Controller::index');
$router->post('/', 'Application\Controllers\Controller::get');