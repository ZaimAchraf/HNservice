<?php


namespace app\models;

use PDO;

class EmployeeModel extends AbstractModel
{

    protected $id;
    protected $fullName;
    protected $email;
    protected $tel;
    protected $address;
    protected $service;
    protected $picture;



    public static $tableName    = 'employees';
    public static $pk           = 'id';
    public static $tableSchema  = array(

        'fullName'      => PDO::PARAM_STR,
        'email'         => PDO::PARAM_STR,
        'tel'           => PDO::PARAM_STR,
        'address'       => PDO::PARAM_STR,
        'service'       => PDO::PARAM_INT,
        'picture'       => PDO::PARAM_STR,

    );

    public static function getAll($cond = '') {
        global $connect;
        $sql  = 'SELECT e.*, title_en, s.id as service FROM ' . static::$tableName . ' e, services s WHERE e.service = s.id ';
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC); //\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, get_called_class(), array_keys(static::$tableSchema)
        if(isset($results) && !empty($results)){
            return $results;
        }else{
            return [];
        }
    }

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

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service): void
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }


}