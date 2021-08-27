<?php


namespace app\Controllers;


use app\core\Controller;

class LangController extends Controller
{
    public function changeLangToEn()
    {
        $_SESSION['lang']   = "en";

        $previous = "/home";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
        }
        header('Location: ' . $previous);
    }
    public function changeLangToFr()
    {
        $_SESSION['lang']   = "fr";

        $previous = "/home";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
        }
       header('Location: ' . $previous);
    }
}