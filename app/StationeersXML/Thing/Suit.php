<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Suit extends Thing
{
    public const TYPE = 'suit';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}