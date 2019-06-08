<?php

class TourOperator
{
    // DB Representation
    private $id;
    private $name;
    private $grade;
    private $link;
    private $isPremium;
    private $logoFile;

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

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function setGrade(int $grade)
    {
        $this->grade = $grade;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink(string $link)
    {
        $this->link = $link;
    }

    public function getIsPremium()
    {
        return $this->isPremium;
    }

    public function setIsPremium(int $isPremium)
    {
        $this->isPremium = $isPremium;
    }

    public function getLogo()
    {
        return $this->logoFile['name'];
    }

    public function setLogo(array $logo)
    {
        $this->logoFile = $logo;
    }

    public function uploadLogoToServer()
    {
        // REFACTOR:
        $target_dir = "../assets/uploads/operators/";
        $target_file = $target_dir . basename($this->logoFile['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($this->logoFile["tmp_name"]);
        if ($check !== false) $uploadOk = 1;
        else $uploadOk = 0;

        // Check if file already exists
        // if (file_exists($target_file)) $uploadOk = 0;

        // Check file size
        if ($this->logoFile["size"] > 8000000) $uploadOk = 0;

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png")
            $uploadOk = 0;

        // $this->resizeImageToSquare();
        // Check if $uploadOk is set to 0 by an error
        if (!$uploadOk) die('An error occured');
        else {
            if (!move_uploaded_file($this->logoFile["tmp_name"], $target_file))
                return false;
        }
    }

    public function resizeImageToSquare()
    {
        // TODO: Utiliser Imagick https://www.php.net/manual/fr/imagick.resizeimage.php
    }
}
