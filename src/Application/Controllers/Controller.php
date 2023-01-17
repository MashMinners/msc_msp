<?php

declare(strict_types=1);

namespace Application\Controllers;

use Application\Models\Model;
use Application\Views\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;

class Controller
{
    public function __construct(private Model $model, private View $view){

    }

    private function getHtmlRows(array $data){
        $html =$this->view->render();
        return $html;
    }

    public function getRows() : ResponseInterface{
        $code = 'И060154';
        $data = $this->model->getData($code);
        $html = $this->getHtmlRows($data);
        $response = new HtmlResponse($html);
        return $response;
    }

}