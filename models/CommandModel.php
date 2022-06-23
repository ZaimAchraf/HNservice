<?php


namespace app\models;

use PDO;

class CommandModel extends AbstractModel
{

    protected $id;
    protected $fullName;
    protected $email;
    protected $phone;
    protected $message;
    protected $service;


    public static $tableName    = 'orders';
    public static $pk           = 'id';
    public static $tableSchema  = array(

        'fullName'      => PDO::PARAM_STR,
        'email'         => PDO::PARAM_STR,
        'phone'           => PDO::PARAM_STR,
        'message'       => PDO::PARAM_STR,
        'service'       => PDO::PARAM_INT,

    );

    public static function getAll($cond = '') {
        global $connect;
        $sql  = 'SELECT c.*, title_en, s.id as service FROM ' . static::$tableName . ' c, services s WHERE c.service = s.id AND ' . ($cond != '' ? $cond :'1=1');

        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC); //\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, get_called_class(), array_keys(static::$tableSchema)
        if(isset($results) && !empty($results)){
            return $results;
        }else{
            return [];
        }
    }

    public static function changeStatus($id, $status) {
        global $connect;
        $sql = 'UPDATE ' . static::$tableName . ' SET status=:status where id=:id';

        $stmt = $connect->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':status', $status);

        return $stmt->execute();
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
     * @param mixed $fullName
     */
    public function setFullName($fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $service
     */
    public function setService($service): void
    {
        $this->service = $service;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }


}