<?php

// no need for Autoload
require_once ('Human.php');

/**
 * Class HumanGenerals
 */
class HumanGenerals extends Human
{
    /**
     * Class properties
     */
    private $birthDate;
    private $gender;
    private $height;
    private $weight;
    private $skinTone;
    private $firstName;
    private $lastName;

    /**
     * HumanGenerals constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $birthDate
     * @param int $height
     * @param int $weight
     * @param string $gender
     * @param string $skinTone
     */
    public function __construct($firstName, $lastName, $birthDate, $height, $weight, $gender, $skinTone)
    {
        $this->birthDate = $birthDate;
        $this->height = $height;
        $this->weight = $weight;
        $this->gender = $gender;
        $this->skinTone = $skinTone;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * Get person full name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }


    /**
     * Get current age of a person in years
     *
     * @return integer
     */
    public function getAge()
    {
          $from = new DateTime($this->birthDate);
          $to = new DateTime('today');

          return $from->diff($to)->y;
    }

    /**
     * Get current stage of life
     *
     * @return string
     */
    public function getStage()
    {
        $age = $this->getAge();

        switch ($age) {
            case $age > 0 && $age < 3:
                return "infant";
                break;
            case $age >= 3 && $age < 12:
                return "child";
                break;
            case $age >= 12 && $age < 18:
                return "adolescent";
                break;
            case $age >= 18:
                return "adult";
                break;
            default:
                return "unknown";
        }
    }

    /**
     * Get height of a person
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }


    /**
     * Get weight of a person
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }


    /**
     * Get gender of a person
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Get skin tone
     *
     * @return string
     */
    public function getSkinTone()
    {
        return $this->skinTone;
    }

}

//just a test, not an instantiation within class
//$human = new HumanGenerals( 'John', 'Doe','12-01-1999', 198, 85, 'male', '#ffe0bd');
//
//var_dump($human->generals());