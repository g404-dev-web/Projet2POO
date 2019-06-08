<?php
class TourOperator
{
    // DB representation
    private $id;
    private $name;
    private $grade;
    private $link;
    private $is_premium;
    private $logoPath;
    

    // Hydrate
    /* public function __construct(array $data)
     * {
     *     $this->hydrate($data);
     * }

     * public function hydrate(array $data)
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
	$name,
	$grade,
	$link,
	$is_premium,
	$logoPath
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
        $this->link = $link;
	$this->is_premium = $is_premium;
	$this->logoPath = $logoPath;
    }


    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getIsPremium()
    {
        return $this->is_premium;
    }

    public function getLogoPath()
    {
        return $this->logoPath;
    }
}
