<?php

namespace interfaceTest;

interface Predator
{
    /**
     * @param Prey $prey
     * @return mixed
     */
    public function chase(Prey $prey);

    /**
     * @param Prey $prey
     * @return mixed
     */
    public function kill(Prey $prey);
}