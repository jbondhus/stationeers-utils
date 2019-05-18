<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class ElevatorCarrage extends Thing
{
    public const TYPE = 'elevator_carrage';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}