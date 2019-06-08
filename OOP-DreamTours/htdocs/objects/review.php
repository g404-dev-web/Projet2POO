<?php

class Review 
{
    private $id,
            $message,
            $author,
            $rate,
            $id_tour_operator;

    function __construct($id, $message, $author, $rate, $id_tour_operator)
    {
        $this->id = $id;
        $this->message = $message;
        $this->author = $author;
        $this->rate = $rate;
        $this->id_tour_operator = $id_tour_operator;
    }

    function getId()
    {
        return $this->id;
    }

    function getMessage()
    {
        return $this->message;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getRate()
    {
        return $this->rate;
    }

    function getId_tour_operator()
    {
        return $this->id_tour_operator;
    }

}