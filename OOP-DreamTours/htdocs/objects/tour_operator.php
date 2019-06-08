<?php

class TourOperator 
{
    private $id,
            $name,
            $grade,
            $link,
            $is_prenium;

    function __construct($id, $name, $grade, $link, $is_prenium)
    {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
        $this->link = $link;
        $this->is_prenium = $is_prenium;
    }

    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function getGrade()
    {
        return $this->grade;
    }

    function getLink()
    {
        return $this->link;
    }

    function getIsPrenium()
    {
        return $this->is_prenium;
    }

}