<?php

class Manager 
{
    private $bdd;


    function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    /////////////get///////////////


    function getAllDestination($location)
    {
        $q = $this->bdd->prepare('SELECT *
                                  FROM destinations');

        $q->execute(array($location));

        return $q->fetchAll();
    }

    

    function getAllOperator($name)
    {
        $q = $this->bdd->prepare('SELECT name 
                                  FROM tour_operators');

        $q->execute(array($name));

        return $q->fetch();
    }

    public function getOperateurByDestination(string $location)
    {
        $q = $this->bdd->prepare("SELECT *
                                  FROM tour_operators
                                  INNER JOIN destinations
                                  ON tour_operators.id = destinations.id_tour_operator
                                  WHERE destinations.location = ?");

        $q->execute(array($location));

        return $q->fetchAll();
    }

    function getReviewByOperator($tourOperator)
    {
        $q = $this->bdd->prepare("SELECT * 
                                  FROM reviews 
                                  INNER JOIN tour_operators
                                  ON reviews.id_tour_operator = tour_operators.id
                                  WHERE tour_operators.name = ?");

        $q->execute(array($tourOperator));

        return $q->fetchAll();
    }

    function getAverage($average)
    {
        $q = $this->bdd->prepare('UPDATE tour_operators
                                  SET grade = (SELECT AVG(rate) AS avg
                                  FROM reviews
                                  WHERE reviews.id_tour_operator = tour_operators.id)
                                  WHERE id 
                                  IN (SELECT DISTINCT reviews.id_tour_operator 
                                      FROM reviews)');
    
        $q->execute(array($average));
    
        
    }


    // function getAverage($average)
    // {
    //     $q = $this->bdd->prepare('SELECT id_tour_operator, AVG(rate) AS avg
    //                               FROM reviews
    //                               GROUP BY id_tour_operator');

    //     $q->execute(array($average));

    //     return $q->fetchAll();
    // }
    


    ///////////////add///////////////////

    function createDestination(Destination $desestination)
    {
        $q = $this->bdd->prepare('INSERT INTO destinations(location, price, id_tour_operator)
                                  VALUES(?, ?, ?)');

        $q->execute(array($desestination->getLocation(), $desestination->getPrice(), $desestination->getId_tour_operator()));
    }

    function createTourOperator(TourOperator $tourOperator)
    {
        $q = $this->bdd->prepare('INSERT INTO tour_operators(name, grade, link , is_prenium)
                                  VALUES(?)');

        $q->execute(array($tourOperator->getName(), $tourOperator->getGrade(), $tourOperator->getLink(), $tourOperator->getIsPrenium()));
    }

    function createReview(Review $review)
    {
        $q = $this->bdd->prepare('INSERT INTO reviews(message, author, rate, id_tour_operator)
                                  VALUES(?, ?, ?, ?)');

        $q->execute(array($review->getMessage(), $review->getAuthor(), $review->getRate(), $review->getId_tour_operator()));
    }

    function updateOperatorToPrenium($is_prenium, $name) {
        $q = $this->bdd->prepare('UPDATE tour_operators 
                                  SET is_prenium = ? 
                                  WHERE name = ?');

        $q->execute(array($is_prenium, $name));
    }
}