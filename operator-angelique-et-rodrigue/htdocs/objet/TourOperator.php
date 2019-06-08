<?php

require_once('bdd.php');
require_once('Manager.php');


class TourOperator {

private $id;
private $name;
private $grade;
private $link;
private $is_premium;
private $img;

function __construct($id, $name, $grade, $link, $is_premium, $img){

    $this->id = $id;
    $this->name = $name;
    $this->grade = $grade;
    $this->link = $link;
    $this->is_premium = $is_premium;
    $this->img = $img;
    
}
// Getters
public function getId(){
    return $this->id;
}
public function getName(){
    return $this->name;
}
public function getGrade(){
    return $this->grade;
}
public function getLink(){
    return $this->link;
}

public function getIs_premium(){
    return $this->is_premium;
}

public function getImg(){
    return $this->img;
}
}
?>


