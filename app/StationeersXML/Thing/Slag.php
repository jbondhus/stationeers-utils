<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Slag extends Thing
{
    public const TYPE = 'slag';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}