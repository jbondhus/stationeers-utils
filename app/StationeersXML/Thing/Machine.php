<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Machine extends Thing
{
    public const TYPE = 'machine';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}