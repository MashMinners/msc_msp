<?php

declare(strict_types=1);

namespace Application\Views;

class View
{
    public function render(string $template, $content=null)//: string
    {
        $layout = 'src/Application/Views/layout.php';
        $css = 'src/Application/Views/style.css';
        try {
            ob_start();
            include $layout;
            $content = ob_get_clean();
        } catch (\Exception $e) {
            throw $e;
        }
        return $content;
    }
}