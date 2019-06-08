<?php
class Destination
{
    // DB representation
    private $id;
    private $location;
    private $price;
    private $id_tour_operator;
    private $imgPath;
    private $description;

    // Hydrate
    /* public function __construct(array $data)
     * {
     *     $this->hydrate($data);
     * }
     */
    /* public function hydrate(array $data)
     * {
     *     foreach ($data as $key => $value) {
     *         $method = 'set' . ucfirst($key);

     *         if (method_exists($this, $method)) {
     *             $this->$method($value);
     *         }
     *     }
     * } */

    public function __construct(
        $id,
        $location,
        $price,
        $id_tour_operator,
        $description,
        $imgPath)
    {
        $this->id = $id;
        $this->location = $location;
        $this->price = $price;
        $this->id_tour_operator = $id_tour_operator;
        $this->imgPath = $imgPath;
        $this->description = $description;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getIdTour_operator()
    {
        return $this->id_tour_operator;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImgPath()
    {
        return $this->imgPath;
    }


}
