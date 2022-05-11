<?php

namespace ThangPhu\UnlockOOP;

use ThangPhu\UnlockOOP\Animal;

class Dog implements Animal
{
    function voice()
    {
        echo 'go go';
    }
    function color()
    {
        echo 'black';
    }
}
