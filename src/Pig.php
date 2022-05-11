<?php

namespace ThangPhu\UnlockOOP;

use ThangPhu\UnlockOOP\Animal;

class Pig implements Animal
{
    /**
     * @return mixed|void
     */
    function voice()
    {
        return 'op op';
    }

    /**
     * @return mixed|void
     */
    function color()
    {
        return 'pink';
    }
}
