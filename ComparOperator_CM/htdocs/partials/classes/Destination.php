<?php

class Destination {
    private $id;
    private $location;
    private $price;
    private $id_tour_operator;
    private $imgName;

    public function __construct($destination){
            $this->id = $destination['id'];
            $this->location = $destination['location'];
            $this->price = $destination['price'];
            $this->id_tour_operator = $destination['id_tour_operator'];
            $this->imgName = $destination['imgName'];
    }

    public function getId(){
        return $this->id;
    }

    public function getLocation(){
        return $this->location;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getId_tour_operator(){
        return $this->id_tour_operator;
    }

    public function getImgName(){
        return $this->imgName;
    }
}