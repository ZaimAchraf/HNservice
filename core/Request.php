<?php


namespace app\core;


class Request
{

    public function getPath()
    {
        $realPath   = $_SERVER["REQUEST_URI"] ? : "/";
        $position   = strpos($realPath,'?');
        if($position)
        {
            $path = substr($realPath ,0,$position);
            return $path;
        }else{
            return $realPath;
        }
    }

    public function getMethod()
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    public function all()
    {
        $args = [];
        if( $_SERVER["REQUEST_METHOD"] == "POST")
        {
            foreach ( $_POST as $key => $value)
            {
                $args[] = filter_input(INPUT_POST, $key,FILTER_SANITIZE_SPECIAL_CHARS);
                //echo '$key : '.$key.' => value : '.$value;
            }
        }
        if( $_SERVER["REQUEST_METHOD"] == "GET")
        {
                foreach ( $_GET as $key => $value)
            {
                $args[] = filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $args;
    }

}