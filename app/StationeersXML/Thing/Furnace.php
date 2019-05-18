<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Furnace extends Thing
{
    public const TYPE = 'furnace';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}