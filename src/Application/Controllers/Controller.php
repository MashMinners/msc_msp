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

    private function getHtml(string $template, array|null $data = null){
        $html =$this->view->render($template, $data);
        return $html;
    }

    public function get(ServerRequestInterface $request) : ResponseInterface {
        $code = $request->getParsedBody()['code'];
        if (isset($code)){
            $data = $this->model->getData($code);
        }
        else{
            $data = null;
        }
        $html = $this->getHtml('src/Application/Views/view-table.php',$data);
        $response = new HtmlResponse($html);
        return $response;
    }

    public function index(){
        $html = $this->getHtml('src/Application/Views/view-query.php');
        $response = new HtmlResponse($html);
        return $response;
    }

}