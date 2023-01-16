<?php

declare(strict_types=1);

namespace Application\Controllers;

use Application\Models\Model;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;

class Controller
{
    public function __construct(private Model $model){

    }

    private function getHtmlRows(array $data){
        $html ='';
        foreach ($data as $singleRow){

        }

        return $html;
    }

    public function getRows() : ResponseInterface{
        $result = $this->model->getFiveFirstLines();
        //$result = json_encode($result);
        //$response = new JsonResponse($result);
        $html = $this->getHtmlRows($result);
        $response = new HtmlResponse($html);
        return $response;
    }

}