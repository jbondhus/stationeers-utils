<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Consumable extends Thing
{
    public const TYPE = 'consumable';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}