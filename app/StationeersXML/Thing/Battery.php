<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Battery extends Thing
{
    public const TYPE = 'battery';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}