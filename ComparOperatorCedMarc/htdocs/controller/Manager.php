<?php

class Manager
{
    private $bdd;
    private $allDestinations = [];
    private $allTOForADestination = [];

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAllDestinationsAsObjects()
    {
        $sql = "SELECT * FROM destinations GROUP BY location";
        $bdd = $this->bdd;
        $req = $bdd->query($sql);
        $allDestinations = $req->fetchAll();

        foreach ($allDestinations as $destination) {
            $dest = new Destination(
                $destination['id'],
                $destination['location'],
                $destination['price'],
                $destination['id_tour_operator'],
                $destination['description'],
                $destination['imagePath']
            );
            $arrayObjects[] = $dest;
        }
        return $arrayObjects;
    }

    public function getTOsByDestinationAsObjects($destination)
    {
        $sql = "
SELECT * FROM tour_operators
INNER JOIN destinations
ON destinations.id_tour_operator = tour_operators.id WHERE location = '$destination';";
        $bdd = $this->bdd;
        $req = $bdd->query($sql);
        $allTOs = $req->fetchAll();

        foreach ($allTOs as $TO) {
            $arrayObjects[] = new TourOperator(
                $TO['id_tour_operator'],
                $TO['name'],
                $TO['grade'],
                $TO['link'],
                $TO['is_premium'],
                $TO['logoPath']
            );
        }
        return $arrayObjects;
    }

    public function getTOAsObject($id)
    {
        $sql = "SELECT * FROM tour_operators WHERE id = '$id';";
        $bdd = $this->bdd;
        $req = $bdd->query($sql);
        $TO = $req->fetch();

        $TOObject = new TourOperator(
            $TO['id'],
            $TO['name'],
            $TO['grade'],
            $TO['link'],
            $TO['is_premium'],
            $TO['logoPath']);

        return $TOObject;
    }

    public function getTOsAsObjects()
    {
        $sql = "SELECT * FROM tour_operators";
        $bdd = $this->bdd;
        $req = $bdd->query($sql);
        $TOs = $req->fetchAll();

        foreach ($TOs as $TO) {
            $TOsObjects[] = new TourOperator(
                $TO['id'],
                $TO['name'],
                $TO['grade'],
                $TO['link'],
                $TO['is_premium'],
                $TO['logoPath']);
        }
        return $TOsObjects;
    }

    public function getDestinationOfTO($destinationLocation,$idTO)
    {
        $sql = "
SELECT * FROM destinations
WHERE id_tour_operator = '$idTO'
AND location = '$destinationLocation';";
        
        $bdd = $this->bdd;
        $req = $bdd->query($sql);
        $dest = $req->fetch();

        if ($dest != null) {
            $destObject = new Destination(
                $dest['id'],
                $dest['location'],
                $dest['price'],
                $dest['id_tour_operator'],
                $dest['description'],
                $dest['imagePath']
            );
            return $destObject; } else {
                return null; }
    }

    public function getDestinationsOfTOAsObjects($idTO)
    {
        $sql = "SELECT * FROM destinations WHERE id_tour_operator = $idTO;";
        $bdd = $this->bdd;
        $req = $bdd->query($sql);
        $destinations = $req->fetchAll();

        if ($destinations != null) {
            foreach ($destinations as $destination) {
                $destinationsObjects[] = new Destination(
                    $destination['id'],
                    $destination['location'],
                    $destination['price'],
                    $destination['id_tour_operator'],
                    $destination['description'],
                    $destination['imagePath']
                );
            }
            return $destinationsObjects; } else {
            return null; }
    }
    
    public function getAllReviewsAsObjects($idTO)
    {
        $sql = "SELECT * FROM reviews WHERE id_tour_operator = $idTO";
        $bdd = $this->bdd;
        $req = $bdd->query($sql);
        $allReviews = $req->fetchAll();

        if ($allReviews != null) {
            foreach ($allReviews as $review) {
                $reviewsObjects[] = new Review(
                    $review['id'],
                    $review['message'],
                    $review['author'],
                    $review['id_tour_operator']
                );
            }
            return $reviewsObjects; } else {
            return null; }
    }

    public function createReview(Review $review)
    {
        $sql = "INSERT INTO reviews(message, author, id_tour_operator) VALUES(?, ?, ?)";
        $req = $this->bdd->prepare($sql);
        $req->execute(array(
            $review->getMessage(),
            $review->getAuthor(),
            $review->getIdTourOperator()
        ));
    }

    public function addDestination(Destination $destination, $idTO)
    {
        $sql = "INSERT INTO destinations(location, price, id_tour_operator, description, imagePath)
VALUES(?, ?, ?, ?, ?)
";
        $req = $this->bdd->prepare($sql);
        $req->execute(array($destination->getLocation(),
                            $destination->getPrice(),
                            $destination->getIdTour_operator(),
                            $destination->getImgPath(),
                            $destination->getDescription(),
        ));
    }

    public function deleteDestination($destId)
    {
        $req = $this->bdd->prepare('DELETE FROM destinations WHERE id = ?');
        $req->execute(array($destId));
    }
 
    public function addTO(TourOperator $TO)
    {
        $sql = "INSERT INTO tour_operators(name, grade, link, is_premium, logoPath)
VALUES(?, ?, ?, ?, ?)
";
        $req = $this->bdd->prepare($sql);
        $req->execute(array($TO->getName(),
                            $TO->getGrade(),
                            $TO->getLink(),
                            $TO->getIsPremium(),
                            $TO->getLogoPath()
        ));
    }

    public function updateTOIsPremium($valueIsPremium, $idTO)
    {
        $req = $this->bdd->prepare("UPDATE tour_operators SET is_premium = ? WHERE id = ?");
        $req->execute(array($valueIsPremium, $idTO,));
    }
}
