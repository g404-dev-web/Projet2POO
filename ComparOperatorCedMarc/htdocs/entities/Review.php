<?php
class Review
{
    // DB representation
    private $id;
    private $message;
    private $author;
    private $id_tour_operator;

    public function __construct($id, $message, $author, $id_tour_operator)
    {
        $this->id = $id;
        $this->message = $message;
        $this->author = $author;
        $this->id_tour_operator = $id_tour_operator;
    }


    /* Setters
     * public function setId(int $id)
     * {
     *     $this->id = $id;
     * }

     * public function setUserId(int $userId)
     * {
     *     $this->userId = $userId;
     * }

     * public function setName(string $name)
     * {
     *     $this->name = $name;
     * }

     * public function setHealthPoints(int $hp)
     * {
     *     $this->healthPoints = $hp;
     * }

     * public function setClass(string $class)
     * {
     *     $this->class = $class;
     * }

     * public function setStrength(int $strength)
     * {
     *     $this->strength = $strength;
     * }

     * public function setXp(int $xp)
     * {
     *     $this->xp = $xp;
     * } */


    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getIdTourOperator()
    {
        return $this->id_tour_operator;
    }

    /* Actions
     * public function attack(Character $target)
     * {
     *     $this->computeDamage();
     * }

     * public function isDead()
     * {
     *     if ($this->healthPoints <= 0) return true;
     * }

     * protected function takeDamage(Character $attacker)
     * {
     *     $this->healthPoints -= $attacker->damage;
     * }

     * protected function computeDamage()
     * {
     *     $this->damage = (rand(1, 10) / 10)  * $this->strength;
     * }
     */
}
