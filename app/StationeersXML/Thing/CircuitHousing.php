<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class CircuitHousing extends Thing
{
    public const TYPE = 'circuit_housing';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}