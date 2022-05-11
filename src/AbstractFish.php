<?php

namespace ThangPhu\UnlockOOP;

abstract class AbstractFish
{
    public $name;
    public $place;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        echo $this->name;
    }
    public function setPlace($place)
    {
        $this->place = $place;
    }
    public function getPlace()
    {
        echo $this->place;
    }
}
