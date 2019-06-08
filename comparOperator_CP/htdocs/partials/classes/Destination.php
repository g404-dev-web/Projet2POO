<?php

class Destination
{
    // DB Representation
    private $id;
    private $location;
    private $price;
    private $idTourOperator;


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

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation(string $location)
    {
        $this->location = $location;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function getIdTourOperator()
    {
        return $this->idTourOperator;
    }

    public function setIdTourOperator(int $idTourOperator)
    {
        $this->idTourOperator = $idTourOperator;
    }
}
