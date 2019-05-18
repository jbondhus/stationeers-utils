<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class SimpleFabricator extends Thing
{
    public const TYPE = 'simple_fabricator';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}