<?php

namespace Application;

use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequest;

class BookController
{
    public function __construct(private Book $book){

    }
    /*public function __invoke(ServerRequest $request){
        $text = $this->book->getText();
        $response = new Response();
        $response->getBody()->write($text.' <br>');
        return $response;
    }*/
    public function index(){
        $response = new Response();
        $response->getBody()->write('Yeah?'.$this->book->getText().' <br>');
        return $response;
    }

}