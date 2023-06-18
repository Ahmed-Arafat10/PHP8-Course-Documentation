<?php

namespace interfaceTest;


interface Prey
{
    /**
     * @param Predator $predator
     * @return mixed
     */
    public function chasedBy(Predator $predator);

    /**
     * @param Predator $predator
     * @param PreyMethod $p
     * @return mixed
     */
    public function killedBy(Predator $predator, PreyMethod $p);
}