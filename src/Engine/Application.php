<?php

namespace Engine;

use Application\Book;
use Laminas\HttpHandlerRunner\Emitter\SapiStreamEmitter;

class Application
{

    public function __construct(private Book $book)
    {

    }

    public function text(){
        return $this->book->getText().'Book #2 text'.' Text from app <br>';
    }

    public function run($response){
        $emitter = new SapiStreamEmitter();
        $emitter->emit($response);
    }

}