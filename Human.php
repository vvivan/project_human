<?php


abstract class Human
{

    abstract protected function getFullName();
    abstract protected function getAge();
    abstract protected function getStage();
    abstract protected function getHeight();
    abstract protected function getWeight();
    abstract protected function getGender();
    abstract protected function getSkinTone();


    /*
     * Defines human with properties
     *
     * @return string
     */
    public function generals()
    {
        return [
            'full_name' => $this->getFullName(),
            'age'       => $this->getAge(),
            'stage'     => $this->getStage(),
            'height'    => $this->getHeight(),
            'weight'    => $this->getWeight(),
            'gender'    => $this->getGender(),
            'skin_tone' => $this->getSkinTone(),
        ];
    }
}