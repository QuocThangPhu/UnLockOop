<?php

namespace ThangPhu\UnlockOOP;

use ThangPhu\UnlockOOP\AbstractFish;

class Shark extends AbstractFish implements BigFishInterface
{
    public $weight;

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        echo $this->weight;
    }
}
