<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class AirConditioner extends Thing
{
    public const TYPE = 'air_conditioner';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}