<?php

trait Weighable
{
    private $kg;

    public function setWeight($kg)
    {
        $this->kg = $kg;
    }
}