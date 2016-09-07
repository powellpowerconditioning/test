<?php

namespace PowellPowerConditioning\Test;

class Test
{
    private $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    public function __toString()
    {
        return $this->test;
    }
}