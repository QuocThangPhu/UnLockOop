<?php

namespace ThangPhu\UnlockOOP;

use ThangPhu\UnlockOOP\AbstractFish;

class Shark extends AbstractFish implements BigFishInterface
{
    /**
     * @var $weight
     */
    public $weight;

    /**
     * @param $weight
     * @return mixed|void
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed|void
     */
    public function getWeight()
    {
        echo $this->weight;
    }
}
