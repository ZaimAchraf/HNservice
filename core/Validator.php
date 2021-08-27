<?php


namespace app\core;


trait Validator
{

    public function require(array $data): string
    {
        $errors = array();
        foreach($data as $key => $value)
        {
            if(empty($value))
            {
                return "fields are required";
            }
        }

        return "success";
    }

    public function sanitize(array $data): array
    {
        $params = array();
        foreach ($data as $key => $value)
        {
            $params[$key] = filter_var($value,FILTER_SANITIZE_SPECIAL_CHARS);

            if($key == "email"){
                $params[$key] = filter_var($params[$key],FILTER_SANITIZE_EMAIL);
            }

        }
        return $params;
    }

    public function passwordsIdentique($pass1,$pass2): bool
    {
        return $pass1 == $pass2;
    }
}