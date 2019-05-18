<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Cable extends Thing
{
    public const TYPE = 'cable';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}