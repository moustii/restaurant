<?php

namespace App\Controllers;

abstract class MainController
{
    public function render(string $file, array $datas = [])
    {
        extract($datas);
        ob_start();
        require_once 'Views/'.$file.'.php';
        $content = ob_get_clean();
        require_once 'Views/common/template.php';
    }



}