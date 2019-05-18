<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Stackable extends Thing
{
    public const TYPE = 'stackable';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}