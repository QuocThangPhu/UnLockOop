<?php

namespace ThangPhu\UnlockOOP;

use ThangPhu\UnlockOOP\Animal;

class Pig implements Animal
{
    function voice()
    {
        echo 'op op';
    }
    function color()
    {
        echo 'pink';
    }
}
