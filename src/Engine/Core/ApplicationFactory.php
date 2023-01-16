<?php

namespace Engine\Core;

use Application\Book;
use Engine\Application;
use League\Route\Router;

class ApplicationFactory
{
    public function __construct(private IRouter $router){

    }

    public function create(Book $book){
        $router = new Router();
        return new Application($book, $this->router, $router);
    }

}