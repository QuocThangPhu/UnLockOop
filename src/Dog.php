<?php

namespace ThangPhu\UnlockOOP;

use ThangPhu\UnlockOOP\Animal;

class Dog implements Animal
{
    /**
     * @return string
     */
    function voice()
    {
        return 'go go';
    }

    /**
     * @return mixed|void
     */
    function color()
    {
        return 'black';
    }
}
