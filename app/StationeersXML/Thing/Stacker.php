<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Stacker extends Thing
{
    public const TYPE = 'stacker';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}