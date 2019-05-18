<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class SolarPanel extends Thing
{
    public const TYPE = 'solar_panel';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}