<?php

namespace interfaceTest;

# Prevent creating an object
abstract class PreyMethod
{
    /**
     * @param Predator $predator
     * @return void
     */
    public function chasedBy(Predator $predator)
    {
       var_dump("Please help! 'm being chased by " . get_class($predator));
    }

    /**
     * @param Predator $predator
     * @param PreyMethod $p
     * @return void
     */
    public function killedBy(Predator $predator, PreyMethod $p)
    {
       // var_dump(get_class($p) .  " has been killed by by " . get_class($predator));
        // Late Static Binding
        var_dump(get_class(new static) .  " has been killed by by " . get_class($predator));
    }
}