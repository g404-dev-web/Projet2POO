<?php

class Review {
    private $id;
    private $message;
    private $author;
    private $id_tour_operator;

    public function __construct(array $reviews){
        foreach ($reviews as $review){
            $this->id = $review[0];
            $this->message = $review[1];
            $this->author = $review[2];
            $this->id_tour_operator = $review[3];
        }

    }

    public function getId(){
        return $this->id;
    }

    public function getMessage(){
        return $this->message;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getId_tour_operator(){
        return $this->id_tour_operator;
    }


}