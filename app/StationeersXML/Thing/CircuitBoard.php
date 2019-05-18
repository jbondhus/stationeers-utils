<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class CircuitBoard extends Thing
{
    public const TYPE = 'circuit_board';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}