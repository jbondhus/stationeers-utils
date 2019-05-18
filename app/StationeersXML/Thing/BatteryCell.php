<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class BatteryCell extends Thing
{
    public const TYPE = 'battery_cell';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}