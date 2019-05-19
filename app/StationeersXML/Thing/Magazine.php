<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Magazine extends Thing
{
    public const TYPE = 'magazine';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}