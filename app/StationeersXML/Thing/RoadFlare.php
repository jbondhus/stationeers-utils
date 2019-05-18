<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class RoadFlare extends Thing
{
    public const TYPE = 'road_flare';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}