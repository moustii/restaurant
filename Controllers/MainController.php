<?php

namespace App\Controllers;

abstract class MainController
{
    protected function render(string $file, array|null $datas = [])
    {
        ob_start();
        extract($datas);
        require_once 'Views/'.$file.'.php';
        $content = ob_get_clean();
        require_once 'Views/common/template.php';
    }

    protected function errorPage($msg)
    {
        $data_page = [
            "description" => "Page permettant de gérer les erreurs",
            "title" => "Erreur",
            "msg" => $msg,
        ];
        $this->render('error.view', $data_page);
    }

    // public static function secureHTML($string)
    // {
    //     return htmlentities($string);
    // }
    
    public static function cleanedData(string $data): string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



}