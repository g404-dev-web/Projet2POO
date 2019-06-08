<?php

class TourOperator {
    private $id;
    private $name;
    private $grade;
    private $numberOfGrade;
    private $link;
    private $imgPath;
    private $is_premium;


    public function __construct(array $operator){
            $this->id = $operator['id'];
            $this->name = $operator['name'];
            $this->grade = $operator['grade'];
            $this->link = $operator['link'];
            $this->imgPath = $operator['imgPath'];
            $this->is_premium = $operator['is_premium'];
        
    }

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

    public function getPremium(){
        return $this->is_premium;
    }

    public function getImgPath(){
        return $this->imgPath;
    }

    public function getNumberOfGrade(){
        return $this->numberOfGrade;
    }


}