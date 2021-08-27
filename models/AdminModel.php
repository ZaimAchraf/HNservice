<?php


namespace app\models;

use PDO;

class AdminModel extends AbstractModel
{

    protected $id;
    protected $fullName;
    protected $email;
    protected $password;


    public static $tableName    = 'admin';
    public static $pk           = 'id';
    public static $tableSchema  = array(

        'id'        => \PDO::PARAM_STR,
        'fullName'      => \PDO::PARAM_STR,
        'email'         => \PDO::PARAM_STR,
        'password'      => \PDO::PARAM_STR,

    );

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }


}