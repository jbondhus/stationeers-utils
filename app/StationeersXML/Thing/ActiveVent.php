<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class ActiveVent extends Thing
{
    public const TYPE = 'active_vent';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}