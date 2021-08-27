<?php


namespace app\models;

class ContactModel extends AbstractModel
{

    protected $firstname;
    protected $lastname;
    protected $email;
    protected $subject;
    protected $message;


    public static $tableName   = 'contact';
    public static $pk          = 'contactID';
    public static $tableSchema = array(
        'firstname'     => \PDO::PARAM_STR,
        'lastname'      => \PDO::PARAM_STR,
        'email'         => \PDO::PARAM_STR,
        'subject'       => \PDO::PARAM_STR,
        'message'       => \PDO::PARAM_STR,
    );

    public static function setRead($id) {
        global $connect;
        $sql = 'UPDATE ' . static::$tableName . ' SET readable=1 where contactID=:id';

        $stmt = $connect->prepare($sql);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
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
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public static function getTableName(): string
    {
        return self::$tableName;
    }

    /**
     * @param string $tableName
     */
    public static function setTableName(string $tableName): void
    {
        self::$tableName = $tableName;
    }

    /**
     * @return string
     */
    public static function getPk(): string
    {
        return self::$pk;
    }

    /**
     * @param string $pk
     */
    public static function setPk(string $pk): void
    {
        self::$pk = $pk;
    }

    /**
     * @return array
     */
    public static function getTableSchema(): array
    {
        return self::$tableSchema;
    }

    /**
     * @param array $tableSchema
     */
    public static function setTableSchema(array $tableSchema): void
    {
        self::$tableSchema = $tableSchema;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

}