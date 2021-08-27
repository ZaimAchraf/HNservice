<?php


namespace app\models;

use PDO;

class ServiceModel extends AbstractModel
{
    protected $id;
    protected $title_en;
    protected $title_fr;
    protected $description_en;
    protected $description_fr;
    protected $price;
    protected $picture;
    protected $status = 1;


    public static $tableName    = 'services';
    public static $pk           = 'id';
    public static $tableSchema  = array(

        'title_en'        => PDO::PARAM_STR,
        'title_fr'        => PDO::PARAM_STR,
        'description_en'  => PDO::PARAM_STR,
        'description_fr'  => PDO::PARAM_STR,
        'price'           => PDO::PARAM_INT,
        'picture'         => PDO::PARAM_STR,
        'status'          => PDO::PARAM_STR,

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
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @param mixed $title_fr
     */
    public function setTitleFr($title_fr): void
    {
        $this->title_fr = $title_fr;
    }

    /**
     * @param mixed $description_fr
     */
    public function setDescriptionFr($description_fr): void
    {
        $this->description_fr = $description_fr;
    }

    /**
     * @param mixed $title_en
     */
    public function setTitleEn($title_en): void
    {
        $this->title_en = $title_en;
    }

    /**
     * @param mixed $description_en
     */
    public function setDescriptionEn($description_en): void
    {
        $this->description_en = $description_en;
    }


}