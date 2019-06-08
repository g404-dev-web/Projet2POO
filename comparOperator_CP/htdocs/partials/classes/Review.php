<?php

class Review
{
    // DB Representation
    private $id;
    private $message;
    private $author;
    private $idTourOperator;
    private $grade;


    // Hydratation
    public function __construct(array $hydrate)
    {
        $this->hydrate($hydrate);
    }

    public function hydrate(array $properties)
    {
        foreach ($properties as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    // Getters & Setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function getIdTourOperator()
    {
        return $this->idTourOperator;
    }

    public function setIdTourOperator(int $idTourOperator)
    {
        $this->idTourOperator = $idTourOperator;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function setGrade(int $grade)
    {
        $this->grade = $grade;
    }
}
