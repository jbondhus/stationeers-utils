<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Structure extends Thing
{
    public const TYPE = 'structure';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}