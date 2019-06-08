<?php


class Destination
{
    private $id;
    private $location;
    private $price;
    private $id_tour_operator;
    private $imgPath;
    private $description;

    public function __construct($id,$location,$price,$id_tour_operator,$imgPath,$description)
    {
        $this->id = $id;
        $this->location = $location;
        $this->price = $price;
        $this->id_tour_operator = $id_tour_operator;
        $this->imgPath = $imgPath;
        $this->description = $description;


    }

    public function getId()
    {
        return $this->id;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function getPrice()
    {
        return $this->price;
        
    }
    public function getId_tour_operator()
    {
        return $this->id_tour_operator;
        
    }
    public function getImgPath()
    {
        return $this->imgPath;
    }
    public function getDescription()
    {
        return $this->description;
    }
}