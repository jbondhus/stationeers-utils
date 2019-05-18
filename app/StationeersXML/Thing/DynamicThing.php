<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class DynamicThing extends Thing
{
    public const TYPE = 'dynamic_thing';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}