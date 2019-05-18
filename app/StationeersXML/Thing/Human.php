<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Human extends Thing
{
    public const TYPE = 'human';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}