<?php

class Manager
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // CRUD
    /**
     * $kwargs = ['message', 'author', 'grade', 'idTourOperator'];
     */
    public function createReview(array $kwargs)
    {
        $q = $this->db

            ->prepare("INSERT INTO reviews(message, author, id_tour_operator, grade)
                    VALUES(?, ?, ?, ?)");
        $q->execute([
            $kwargs['message'],
            $kwargs['author'],
            $kwargs['idTourOperator'],
            $kwargs['grade']
        ]);
    }

    public function updateOperatorToPremium(int $idTourOperator)
    {
        $q = $this->db
            ->prepare("UPDATE tour_operators SET tour_operators.is_premium = 1
                    WHERE tour_operators.id = ?");
        $q->execute([
            $idTourOperator
        ]);
    }

    /**
     * $kwargs = ['name', 'grade', 'link', 'isPremium', 'logo'];
     */
    public function createTourOperator(array $kwargs)
    {
        $q = $this->db
            ->prepare("INSERT INTO tour_operators(name, grade, link, is_premium, logo)
                    VALUES(?, ?, ?, ?, ?)");

        if (!preg_match('/^https?:\/\//', $kwargs['link'])) {
            $kwargs['link'] = 'http://' . $kwargs['link'];
        }

        $q->execute([
            $kwargs['name'],
            $kwargs['grade'],
            $kwargs['link'],
            $kwargs['isPremium'],
            $kwargs['logo']
        ]);
    }

    public function updateTourOperator(array $kwargs, int $idTourOperator)
    {
        $q = $this->db
            ->prepare("UPDATE tour_operators
                       SET tour_operators.name = ?,
                           tour_operators.grade = ?,
                           tour_operators.link = ?,
                           tour_operators.is_premium = ?,
                           tour_operators.logo = ?
                       WHERE tour_operators.id = ?");

        $q->execute([
            $kwargs['name'],
            $kwargs['grade'],
            $kwargs['link'],
            $kwargs['isPremium'],
            $kwargs['logo'],
            $idTourOperator
        ]);
    }

    /**
     * $kwargs = ['location', 'price', 'idTourOperator'];
     */
    public function createDestination(array $kwargs)
    {
        $q = $this->db
            ->prepare("INSERT INTO destinations(location, price, id_tour_operator)
                    VALUES(?, ?, ?)");
        $q->execute([
            $kwargs['location'],
            $kwargs['price'],
            $kwargs['idTourOperator']
        ]);
    }




    public function getAllDestinations()
    {
        $q = $this->db->prepare("SELECT destinations.* FROM destinations");
        $q->execute();

        return $q->fetchAll();
    }

    public function getOperatorByDestination(string $location)
    {
        $q = $this->db
            ->prepare("SELECT tour_operators.*
                        FROM tour_operators
                        INNER JOIN destinations
                        ON tour_operators.id = destinations.id_tour_operator
                        WHERE destinations.location = ?");
        $q->execute([
            $location
        ]);

        return $q->fetchAll();
    }

    public function getDestinationsByOperatorId(int $idTourOperator)
    {
        $q = $this->db
            ->prepare("SELECT destinations.*
                       FROM destinations
                       WHERE destinations.id_tour_operator = ?");
        $q->execute([
            $idTourOperator
        ]);

        return $q->fetchAll();
    }

    public function getReviewsByOperatorId(int $idTourOperator, int $start = 0, int $end = 25)
    {
        $q = $this->db
            ->prepare("SELECT reviews.*
                       FROM reviews
                       WHERE reviews.id_tour_operator = ? ORDER BY reviews.id DESC LIMIT ?, ?");
        $q->execute([
            $idTourOperator,
            $start,
            $end
        ]);

        return $q->fetchAll();
    }

    public function isOperatorPremium(int $idTourOperator)
    {
        $q = $this->db
            ->prepare("SELECT tour_operators.*
                       FROM tour_operators
                       WHERE tour_operators.is_premium = 1
                       AND tour_operators.id = ?");
        $q->execute([
            $idTourOperator
        ]);

        if ($q->fetch()['is_premium'] == 1) return true;

        return false;
    }

    public function getAllOperators()
    {
        $q = $this->db->prepare("SELECT tour_operators.* FROM tour_operators");
        $q->execute();

        return $q->fetchAll();
    }

    public function getOperatorById(int $idTourOperator)
    {
        $q = $this->db
            ->prepare("SELECT tour_operators.* FROM tour_operators WHERE tour_operators.id = ?");
        $q->execute([
            $idTourOperator
        ]);

        return $q->fetchAll();
    }

    public function getAverageGradeByOperatorId(int $idTourOperator)
    {
        $q = $this->db
            ->prepare("SELECT AVG(reviews.grade) AS average
                       FROM reviews
                       WHERE reviews.id_tour_operator = ?");
        $q->execute([
            $idTourOperator
        ]);

        return $q->fetch()['average'];
    }

    public function updateAverageGradeForOperatorId($avg, int $idTourOperator)
    {
        $q = $this->db
            ->prepare("UPDATE tour_operators
                       SET tour_operators.grade = ?
                       WHERE tour_operators.id = ?");
        $q->execute([
            round($avg),
            $idTourOperator
        ]);
    }

    public function drawGrades($grade)
    {
        switch ($grade) {
            case 1:
                return "&starf;&star;&star;&star;&star;";
                break;
            case 2:
                return "&starf;&starf;&star;&star;&star;";
                break;
            case 3:
                return "&starf;&starf;&starf;&star;&star;";
                break;
            case 4:
                return "&starf;&starf;&starf;&starf;&star;";
                break;
            case 5:
                return "&starf;&starf;&starf;&starf;&starf;";
                break;
            default:
                return "";
                break;
        }
    }
}
