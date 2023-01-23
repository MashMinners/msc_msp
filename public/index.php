<?php
#1. Автозагрузка классов
chdir(dirname(__DIR__));
require 'vendor/autoload.php';
#2. Инициализация DI контейнера
#2.1 Инициализация League DI контейнера
/*$container = new League\Container\Container;
$container->add(\Application\BookController::class)->addArgument(\Application\Book::class);
$container->add(\Application\Book::class);
$container->add(\Application\Middleware\MiddlewareOne::class);*/
#2.2 Инициализация DI контейнера
$definitions = require 'configs/dependencies.php';
$builder = new \DI\ContainerBuilder();
$builder->addDefinitions($definitions);
$container = $builder->build();

$app = $container->get('Application');
$app->get();
$app->post();

$request = \Laminas\Diactoros\ServerRequestFactory::fromGlobals();
$app->run($request);





#2.3 Назначение стратегии приложения (для корректной работы контейнера)
//$strategy = (new League\Route\Strategy\ApplicationStrategy)->setContainer($container);
#3. Создание роутера
/** @var \League\Route\Router $router */
//$router = (new League\Route\Router)->setStrategy($strategy);
/** @var \League\Route\Route $route */
#3.1 Назначение роутов
//require 'configs/routes.php';


//$request = \Laminas\Diactoros\ServerRequestFactory::fromGlobals();
//$response = $router->dispatch($request);
//$emitter = new \Laminas\HttpHandlerRunner\Emitter\SapiStreamEmitter();
//$emitter->emit($response);
