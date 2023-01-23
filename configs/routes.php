<?php
//$router->lazyMiddleware(\Application\Middleware\MiddlewareOne::class);
//$router->get('/', 'Application\BookController::index')->lazyMiddleware(\Application\Middleware\MiddlewareTwo::class);

$this->get('/', 'Application\Controllers\Controller::index');
$this->post('/', 'Application\Controllers\Controller::get');