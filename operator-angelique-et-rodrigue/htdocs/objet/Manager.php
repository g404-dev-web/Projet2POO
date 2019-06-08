<?php


class Manager
{
    private $bdd;

    function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    //   ---------------- methode Get-----------------------------


    function getAllDestination($location)
    {
        $q = $this->bdd->prepare('SELECT *
                                  FROM destinations LIMIT 0,10');

        $q->execute(array($location));

        return $q->fetchAll();
    }



    function getAllOperator($name)
    {
        $q = $this->bdd->prepare('SELECT * 
                                  FROM tour_operators');

        $q->execute(array($name));

        return $q->fetchAll();
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
        $q = $this->bdd->prepare('SELECT * 
                                  FROM reviews 
                                  INNER JOIN tour_operators
                                  ON reviews.id_tour_operator = tour_operators.id 
                                  WHERE tour_operators.name= ?');

        $q->execute(array($tourOperator));

        return $q->fetchAll();
    }

    // -------------------------------methode Add------------------------------------

    function createDestination(Destination $destination)
    {
        $q = $this->bdd->prepare('INSERT INTO destinations(location, price, id_tour_operator)
                                  VALUES(?, ?, ?)');

        $q->execute(array($destination->getLocation(), $destination->getPrice(), $destination->getId_tour_operator()));
    }


    function createTourOperator(TourOperator $tourOperator)
    {
        $q = $this->bdd->prepare('INSERT INTO tour_operators(name, grade, link , is_premium, img)
                                  VALUES(?)');

        $q->execute(array($tourOperator->getName(), $tourOperator->getGrade(), $tourOperator->getLink(), $tourOperator->getIsPremium(), $tourOperator->getImg()));
    }


    function createReview(Review $review)
    {
        $q = $this->bdd->prepare('INSERT INTO reviews(message, author, id_tour_operators)
                                  VALUES(?, ?, ?)');

        $q->execute(array($review->getMessage(), $review->getAuthor(), $review->getId_tour_operator()));
    }


    function updateOperatorToPremium($is_premium, $name)
    {
        $q = $this->bdd->prepare('UPDATE tour_operators 
                                  SET is_premium = ? 
                                  WHERE name = ?');

        $q->execute(array($is_premium, $name));
    }
}
