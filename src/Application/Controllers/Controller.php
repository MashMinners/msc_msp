<?php

declare(strict_types=1);

namespace Application\Controllers;

use Application\Models\Model;
use Application\Views\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Controller
{
    public function __construct(private Model $model, private View $view){

    }

    private function getHtmlRows(array|null $data){
        $html =$this->view->render($data);
        return $html;
    }

    public function getRows(ServerRequestInterface $request) : ResponseInterface{
        $code = $request->getQueryParams();
        if (isset($code['code'])){
            $code = $code['code'];
            $data = $this->model->getData($code);
        }else{
            $data = null;
        }
        $html = $this->getHtmlRows($data);
        $response = new HtmlResponse($html);
        return $response;
    }

}