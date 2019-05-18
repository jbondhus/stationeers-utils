<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Pipe extends Thing
{
    public const TYPE = 'pipe';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}