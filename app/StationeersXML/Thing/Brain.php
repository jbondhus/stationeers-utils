<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Brain extends Thing
{
    public const TYPE = 'brain';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}