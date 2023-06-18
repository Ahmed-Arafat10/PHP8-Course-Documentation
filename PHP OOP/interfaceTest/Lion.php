<?php

namespace interfaceTest;

class Lion extends PreyMethod implements Predator
{
    /**
     * @param Prey $prey
     * @return void
     */
    public function chase(Prey $prey)
    {
        var_dump("I'm chasing a " . get_class($prey));
    }

    /**
     * @param Prey $prey
     * @return void
     */
    public function kill(Prey $prey)
    {
        var_dump("I have just killed " . get_class($prey));
    }
}