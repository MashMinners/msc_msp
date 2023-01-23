<?php
//$router->lazyMiddleware(\Application\Middleware\MiddlewareOne::class);
//$router->get('/', 'Application\BookController::index')->lazyMiddleware(\Application\Middleware\MiddlewareTwo::class);
$this->router->get('/', 'Application\Controllers\Controller::index');
$this->router->post('/', 'Application\Controllers\Controller::get');