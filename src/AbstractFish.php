<?php

namespace ThangPhu\UnlockOOP;

abstract class AbstractFish
{
    /**
     * @var $name
     */
    public $name;

    /**
     * @var $place
     */
    public $place;

    /**
     * @param $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return void
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return void
     */
    public function getPlace()
    {
        return $this->place;
    }
}
