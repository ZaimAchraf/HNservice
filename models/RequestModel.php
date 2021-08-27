<?php


namespace app\models;


class RequestModel extends AbstractModel
{
    protected $RequestID;
    protected $userID;
    protected $type;


    public static $tableName    = 'requests';
    public static $pk           = 'requestID';
    public static $tableSchema  = array(

        'userID'   => \PDO::PARAM_STR,
        'type'      => \PDO::PARAM_INT,
    );

    public static function getAllReq($type)
    {
        global $connect;
        $sql = 'SELECT r.*, u.fullname, u.email, u.picture FROM requests r , users u WHERE u.userID = r.userID AND type = ' . $type;
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
    public function getRequestID()
    {
        return $this->RequestID;
    }

    /**
     * @param mixed $RequestID
     */
    public function setRequestID($RequestID): void
    {
        $this->RequestID = $RequestID;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID): void
    {
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }
}