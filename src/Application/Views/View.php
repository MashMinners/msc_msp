<?php

declare(strict_types=1);

namespace Application\Views;

class View
{
    public function render($content=null): string
    {
        $layout = 'src/Application/Views/layout.php';
        $template = 'src/Application/Views/view-table.php';
        $css = 'src/Application/Views/style.css';

        try {
            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'format' => 'A4'
            ]);
            ob_start();
            //include $layout;
            include $template;
            $content = ob_get_clean();
            $mpdf->WriteHTML($content);
            $mpdf->Output();
        } catch (\Exception $e) {
            throw $e;
        }

        //return $content;
    }

}